<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class GraficasController extends Controller
{
    public function graficarClientes(){
    	$clients = Clients::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at',
    		date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
    		return view('graficas.graficarClientes', compact('clients'));
    }
}
