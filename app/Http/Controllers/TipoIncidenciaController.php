<?php

namespace App\Http\Controllers;

use App\TipoIncidencia;
use Illuminate\Http\Request;

class TipoIncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs= TipoIncidencia::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoIncidencia = new TipoIncidencia();
        $tipoIncidencia->tipo= $request['tipo'];
        $tipoIncidencia->save();
        return redirect('tipo_incidencias/listtipo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function show(TipoIncidencia $tipoIncidencia, $id)
    {
        $RegistroEncontrado=TipoIncidencia::find($id);
        return $RegistroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoIncidencia $tipoIncidencia)
    {
        return view('editartipo', ['tipo'=>$tipoIncidencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIncidencia $tipoIncidencia)
    {
        $tipoIncidencia->tipo= $request['tipo'];
        $tipoIncidencia->save();
        return redirect('tipo_incidencias/listtipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIncidencia $tipoIncidencia)
    {
        $tipoIncidencia->delete();
        return redirect('tipo_incidencias/listtipo');
    }



    public function listtipo()
    {
        $rs=$this->index();
        return view('listtipo',['rs'=>$rs]);
    }
}
