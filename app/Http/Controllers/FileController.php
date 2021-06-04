<?php

namespace App\Http\Controllers;

use App\Models\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('files.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = request ()->except('_token');
        if($request->hasFile('img_file')){
            $file['img_file']=$request->file('img_file')->store('images', 'public');
        }

        if($request->hasFile('pdf_file')){
            $file['pdf_file']=$request->file('pdf_file')->store('pdfs', 'public');
        }

        if($request->hasFile('audio_file')){
            $file['audio_file']=$request->file('audio_file')->store('audios', 'public');
        }
        
        if($request->hasFile('office_file')){
            $file['office_file']=$request->file('office_file')->store('office', 'public');
        }
        if($request->hasFile('video_file')){
            $file['video_file']=$request->file('video_file')->store('videos', 'public');
        }
        
        file::insert($file);
        return view('files.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(file $file)
    {
        //
    }
}
