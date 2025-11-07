<?php

namespace App\Http\Controllers;

use App\Models\SimuladorCreditosController;
use Illuminate\Http\Request;

class SimuladorCreditosControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SimuladorCreditosController::all();
        return view('simuladorcreditos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('simuladorcreditos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('simuladorcreditos.store');
        $p = $request->input('capital');
        $r = $request->input('intereses') / 100;
        $n = $request->input('mes');

        $cuota = $p * ($i(1 + $i)^$n) / ((1 + $i)^$n - 1);



    }

    /**
     * Display the specified resource.
     */
    public function show(SimuladorCreditosController $simuladorCreditosController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SimuladorCreditosController $simuladorCreditosController)
    {
        //
    }

  
    public function update(Request $request, SimuladorCreditosController $simuladorCreditosController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SimuladorCreditosController $simuladorCreditosController)
    {
        //
    }
}
