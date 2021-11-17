<?php

namespace App\Http\Controllers;

use App\Models\Partidas;
use App\Http\Requests\StorePartidasRequest;
use App\Http\Requests\UpdatePartidasRequest;

class PartidasController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartidasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartidasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function show(Partidas $partidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Partidas $partidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartidasRequest  $request
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartidasRequest $request, Partidas $partidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partidas $partidas)
    {
        //
    }
}
