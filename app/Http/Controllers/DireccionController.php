<?php

namespace App\Http\Controllers;

use App\Models\direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('direccions.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direccions.create');        
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
     * @param  \App\Models\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(direccion $direccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direccion $direccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(direccion $direccion)
    {
        //
    }
}
