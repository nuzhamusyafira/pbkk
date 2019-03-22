<?php

namespace App\Http\Controllers;

use App\mhs;
use App\dosen;
use DB;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cara join
        // $mhs = DB::table('mhs')->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
        // return view ('mhs.index',compact('mhs'));

        // cara has many / has one
        // $data['mhs'] = mhs::all();
        // return view ('mhs.index',$data);

        // cara raw query
        $mhs = DB::select(DB::raw("SELECT * FROM mhs, dosens WHERE dosens.nip = mhs.nipdosenwali"));
        return view ('mhs.index',compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = dosen::pluck('namadosen','nip');
        return view ('mhs.create',compact('dsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mhs::create($request->all());        
        return redirect('/mhs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(mhs $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhsnya    = mhs::findorfail($id);
        $dosennya  = dosen::pluck('namadosen','nip');
        return view('mhs.edit',compact('mhsnya','dosennya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhsnya = mhs::findorfail($id);
        $mhsnya->update($request->all());
        return redirect('/mhs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy($nrp)
    {
        $mhsnya = mhs::findorfail($nrp);
        $mhsnya->delete();
        return redirect('/mhs');
    }
}
