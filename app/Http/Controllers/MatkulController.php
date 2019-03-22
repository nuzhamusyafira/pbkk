<?php

namespace App\Http\Controllers;

use App\matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['matkul'] = matkul::all();        
        return view('matkul.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        matkul::create($request->all());        
        return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($matkul)
    {
        $mk = matkul::findOrFail($matkul); 
        return view('matkul.edit', compact('mk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mk = matkul::findorfail($id);
        $mk->update($request->all());
        return redirect('/matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mk)
    {
        $mk = matkul::findorfail($kode_mk);
        $mk->delete();
        return redirect('/matkul');
    }
}
