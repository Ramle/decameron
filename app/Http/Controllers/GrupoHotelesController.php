<?php

namespace App\Http\Controllers;

use App\GrupoHoteles;
use Illuminate\Http\Request;

class GrupoHotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hoteles.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GrupoHoteles  $grupoHoteles
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoHoteles $grupoHoteles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GrupoHoteles  $grupoHoteles
     * @return \Illuminate\Http\Response
     */
    public function edit(GrupoHoteles $grupoHoteles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GrupoHoteles  $grupoHoteles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrupoHoteles $grupoHoteles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GrupoHoteles  $grupoHoteles
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoHoteles $grupoHoteles)
    {
        //
    }
}
