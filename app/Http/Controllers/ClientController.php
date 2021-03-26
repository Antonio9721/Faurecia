<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ClientsExport;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clients = DB::table('clients')->paginate(5);
        return view('clients.index', compact('clients'));
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
        Client::create($request->all());
        return redirect()->route('clients.index');
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
        $request->validate(
            [
            'Firstname' => 'required',
            'Secondname' => 'required',
            'Address' => 'required',
            'Job'=> 'required',
            'Salary'=> 'required',
            'Bank'=> 'required',
            'Numcount'=> 'required',
            'Phone'=> 'required',
            'Email'=> 'required'
                ]
    );
        $client->update($request->all());

        return redirect()->route('clients.index');
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

       public function exportToXls()
       {
        return Excel::download(new ClientsExport, 'clients.xlsx');

       }

       public function exportToCsv()
       {
        $fileName   = 'clients.csv';
        $clients = Clients::all();

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

            foreach($clients as $client) {
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
}
