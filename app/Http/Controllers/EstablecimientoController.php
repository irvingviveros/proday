<?php

namespace Proday\Http\Controllers;

use Proday\Http\Requests\StoreEstabRequest;
use Proday\Negocio;
use Proday\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negocio = Negocio::all();
        return view ('formulario.establecimiento', compact('negocio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request -> hasFile('imagen_establecimiento')){
            $file = $request -> file('imagen_establecimiento');
            $name = time().$file -> getClientOriginalName();
            $file -> move(public_path().'/images/uploads/logo', $name);
        }

        $establecimiento = new Establecimiento();
        $establecimiento -> nombre_est = $request -> input ('nombre_est');
        $establecimiento -> direccion_est = $request -> input ('dirEst');
        $establecimiento -> facebook_est = $request -> input ('faceEst');
        $establecimiento -> id_n1 = $request -> input ('tipoN');
        $establecimiento -> imagen_e = $name;
        $establecimiento -> save();

        return redirect()->route('proday.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
