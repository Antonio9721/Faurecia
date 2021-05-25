<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ClientExport;
use App\Imports\ClientsImport;
use Maatwebsite\Excel\Facades\Excel;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clients = Client::all();
        return view ('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = $request->all();
        if ($img = $request->file('image')){
            $destinationPath = 'imagenes/clients/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $client['image'] = "$name";
        }

        Client::create($client);

        return redirect()->to(url('/clients'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
       $dataClient = request()->except('_token');
        $client->update($dataClient);
        return redirect()->to(url('/clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
    public function exportToPDF()
    {
        $clients = Client::get();
        $pdf = PDF::loadView('clients.exportToPDF', compact('clients'));
        return $pdf->download('ListadoClientes.pdf');
    }

    public function exportClientsToCSV(Request $request) {
        $fileName   = 'clients.csv';
        $clients    =  Client::all();

        $headers = array(
            "Content-type"         => "text/csv",
            "Content-Disposition"  => "attachment; fileName=$fileName",
            "Pragma"               => "no-cache",
            "Cache-Control"        => "must-revalidate, post-check=0, pre-check=0",
            "Expires"              => "0"
        );

        $columns = array('Nombre', 'Apellidos', 'Dirección', 'Empleo', 'Salario', 'Banco', 'Número de Cuenta', 'Número Teléfonico', 'Correo Electrónico');

        $callback = function() use($clients, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($clients as $client) {
                $row['Firstname']    = $client->Firstname;
                $row['Secondname']   = $client->Secondname;
                $row['Address']      = $client->Address;
                $row['Job']          = $client->Job;
                $row['Salary']       = $client->Salary;
                $row['Bank']         = $client->Bank;
                $row['Numcount']     = $client->Numcount;
                $row['Phone']        = $client->Phone;
                $row['Email']        = $client->Email;

                fputcsv($file, array($row['Firstname'], $row['Secondname'], $row['Address'], $row['Job'], $row['Salary'], $row['Bank'], $row['Numcount'], $row['Phone'], $row['Email']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }
    public function chart() {

        $clients = Client::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Minute(created_at)"))
            ->pluck('count');

        $clients2 = Client::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('Bank', ([2, 5]))
        ->groupBy(\DB::raw("Bank"))
        ->pluck('count');

        return view ('clients.chart')
            ->with('clients', $clients)
            ->with('clients2', $clients2);
    }

    public function cards(){
        $clients = Client::all();
        return view('clients.cards', compact('clients'));
    }

    public function exportToXlsx() {
        return Excel::download(new ClientExport, 'clients.xlsx');
    }

    public function import() {
        return view('clients.import');
    }

    public function importData(Request $request) {
        Excel::import(new ClientsImport, request()->file('excel'));
        return redirect()->to(url('clients'));

    }

    public function exportXml() {
        $clients = Client::all();
        header("Content-type: text/xml");
        echo ("<clients>");
        foreach ($clients as $client) {
            echo ("<nombre>" . $client['Firstname'] . "</nombre>" );
            echo ("<apellidos>" . $client['Secondname'] . "</apellidos>" );
            echo ("<empleo>" . $client['Job'] . "</empleo>" );
            echo ("<salario>" . $client['Salary'] . "</salario>" );
}
echo ("</clients>");
}

}
