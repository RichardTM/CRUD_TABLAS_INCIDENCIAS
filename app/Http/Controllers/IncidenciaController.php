<?php

namespace App\Http\Controllers;

use App\Incidencia;
use Illuminate\Http\Request;
use App\Modulo;
use App\TipoIncidencia;
use App\User;


class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Incidencia::with([
            'modulo',
            'tipo_incidencia',
            'user'
        ])->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           // RELACION PARA MODULOS
           $modulos=Modulo::all();

            // RELACION PARA TIPO INCIDENCIAS
            $tipoincidencias=TipoIncidencia::all();

            // RELACION PARA USER
            $users=User::all();


           return view( 'crearincidencia', compact(  'modulos', 'tipoincidencias', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incid = new Incidencia();
        $incid->titulo= $request['titulo'];
        $incid->descripcion= $request['descripcion'];
        $incid->modulo_id= $request['modulo_id'];
        $incid->tipo_incidencia_id= $request['tipo_incidencia_id'];
        $incid->user_id= $request['user_id'];
        $incid->save();
        return redirect('incidencias/listincidencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        $registroEncontrado= Incidencia::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {



        return view('editarincidencia',  ['incidencia'=>$incidencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia->titulo=$request['titulo'];
        $incidencia->descripcion=$request['descripcion'];
        $incidencia->modulo_id=$request['modulo_id'];
        $incidencia->tipo_incidencia_id=$request['tipo_incidencia_id'];
        $incidencia->user_id=$request['user_id'];
        $incidencia->save();
        return redirect('incidencias/listincidencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();
        return redirect('incidencias/listincidencia');
    }



    public function listincidencia()
    {
        $rs=$this->index();
        return view('listincidencia',['rs'=>$rs]);
    }
}
