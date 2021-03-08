<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $accesories = DB::table('accesories')->paginate(5);
        return view('accesories.index', compact('accesories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Accesory::create($request->all());
        return redirect()->route('accesories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function show(Accesory $accesory)
    {
        return view('accesories.show', compact('accesory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesory $accesory)
    {
        return view('accesories.edit', compact('accesory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesory $accesory)
    {
        $request->validate(
            [
            'Name' => 'required',
            'Kind' => 'required',
            'Price' => 'required',
            'State'=> 'required',
            'Date'=> 'required',
            'Time'=> 'required'
                ]
    );
        $accesory->update($request->all());

        return redirect()->route('accesories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesory $accesory)
    {
        $accesory->delete();
        return redirect()->route('accesories.index');
    }
}
