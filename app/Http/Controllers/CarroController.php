<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carro;
use App\Cliente;
use App\Mecanico;
use App\Http\Requests\CarroRequest;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();
        return View('carro.index')->with('carros',$carros); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = \App\Cliente::all();
        $mecanicos = \App\Mecanico::all();
        return View('carro.create', compact('clientes','mecanicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarroRequest $request)
    {
        Carro::create($request->all());
        return redirect('/carro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);
        $problemas = $carro->problemas()->get();
        $cliente = Cliente::find($carro->cliente_id);
        $mecanico = Mecanico::find($carro->mecanico_id);
        return View('carro.show', compact('carro', 'problemas', 'cliente', 'mecanico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = \App\Cliente::all();
        $mecanicos = \App\Mecanico::all();
        $carro = Carro::find($id);
        return View('carro.edit', compact('clientes', 'mecanicos', 'carro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarroRequest $request, $id)
    {
        $carro = Carro::find($id);
        $carro->update($request->all());
        return redirect('/carro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carro::destroy($id);
        return redirect('/carro');
    }
}
