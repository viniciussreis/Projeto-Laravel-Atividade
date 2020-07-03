<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mecanico;
use App\Http\Requests\MecanicoRequest;

class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mecanicos = Mecanico::all();
        return View('mecanico.index')->with('mecanicos',$mecanicos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('mecanico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MecanicoRequest $request)
    {
        Mecanico::create($request->all());
        return redirect('/mecanico');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mecanico = Mecanico::find($id);
        $carros = $mecanico->carros()->get();
        return View('mecanico.show', compact('mecanico', 'carros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('mecanico.edit')->with('mecanico',Mecanico::find($id));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MecanicoRequest $request, $id)
    {
        $mecanico = Mecanico::find($id);
        $mecanico->update($request->all());
        return redirect('/mecanico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mecanico::destroy($id);
        return redirect('/mecanico');
    }
}
