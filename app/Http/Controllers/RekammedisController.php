<?php

namespace App\Http\Controllers;

use App\Models\rekammedis;
use Illuminate\Http\Request;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $rekammedis=rekammedis::all();
        if($keyword){
            $rekammedis=rekammedis::where("nama_pasien","LIKE","%$keyword%")->get();
        }
        return view('rekammedis/index', compact('rekammedis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekammedis/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien'=>'required',
            'keluhan'=>'required',
            'tgl'=>'required',
            'nama_dokter'=>'required'
            
        ]);
        rekammedis::create($request->all());

        return redirect('/rekammedis')->with('status', 'Data Rekam Medis Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function show(rekammedis $rekammedis)
    {
        return view('rekammedis.show', compact('rekammedis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function edit(rekammedis $rekammedis)
    {
        return view('rekammedis.edit', compact('rekammedis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rekammedis $rekammedis)
    {
        rekammedis::where('id',$rekammedis->id)
        ->update(['nama_pasien'=>$request->nama_pasien,
        'keluhan'=>$request->jk,
        'tgl'=>$request->tgl,
        'nama_dokter'=>$request->nama_dokter
        ]);
        return redirect('/rekammedis')->with('status', 'Data Rekam Medis Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function destroy(rekammedis $rekammedis)
    {
        rekammedis::destroy($rekammedis->id);
        return redirect('rekammedis')->with('status','Data Rekam Medis Berhasil Dihapus');
    }
}
