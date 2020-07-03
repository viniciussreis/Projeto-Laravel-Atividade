<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Problema;
use \App\Carro;
use App\Http\Requests\ProblemaRequest;

class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problemas = Problema::all();
        return View('problema.index')->with('problemas',$problemas); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carros = \App\Carro::all();
        return View('problema.create', compact('carros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProblemaRequest $request)
    {
        Problema::create($request->all());
        return redirect('/problema');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $problema = Problema::find($id);
        $carro = Carro::find($problema->carro_id);
        return View('problema.show', compact('problema', 'carro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carros = Carro::all();
        $problema = Problema::find($id);
        return View('problema.edit', compact('carros', 'problema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProblemaRequest $request, $id)
    {
        $problema = Problema::find($id);
        $problema->update($request->all());
        return redirect('/problema');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Problema::destroy($id);
        return redirect('/problema');
    }
}
