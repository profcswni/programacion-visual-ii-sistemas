<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use App\Http\Requests\StoreUniversidadRequest;
use App\Http\Requests\UpdateUniversidadRequest;

class UniversidadController extends Controller
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
     * @param  \App\Http\Requests\StoreUniversidadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUniversidadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function show(Universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Universidad $universidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUniversidadRequest  $request
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUniversidadRequest $request, Universidad $universidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidad $universidad)
    {
        //
    }
}
