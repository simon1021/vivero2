<?php

namespace App\Http\Controllers;

use App\Models\vivero;
use Illuminate\Http\Request;

class ViveroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viveros.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viveros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vivero = request()->except('_token');
        Vivero::insert($vivero);
        return view('viveros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vivero  $vivero
     * @return \Illuminate\Http\Response
     */
    public function show(vivero $vivero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vivero  $vivero
     * @return \Illuminate\Http\Response
     */
    public function edit(vivero $vivero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vivero  $vivero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vivero $vivero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vivero  $vivero
     * @return \Illuminate\Http\Response
     */
    public function destroy(vivero $vivero)
    {
        //
    }
}
