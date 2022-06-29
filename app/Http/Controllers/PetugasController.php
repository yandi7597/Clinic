<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $petugas=petugas::all();
        if($keyword){
            $petugas=petugas::where("nama_petugas","LIKE","%$keyword%")->get();
        }
        return view('petugas/index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas/create');
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
            'nama_petugas'=>'required',
            'jabatan'=>'required',
            'jk'=>'required',
            'no_hp'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        petugas::create($request->all());

        return redirect('/petugas')->with('status', 'Data Petugas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(petugas $petugas)
    {
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(petugas $petugas)
    {
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, petugas $petugas)
    {
        petugas::where('id',$petugas->id)
        ->update(['nama_petugas'=>$request->nama_petugas,
        'jabatan'=>$request->jabatan,
        'jk'=>$request->jk,
        'no_hp'=>$request->no_hp,
        'username'=>$request->username,
        'password'=>$request->password
        ]);
        return redirect('/petugas')->with('status', 'Data Petugas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(petugas $petugas)
    {
        petugas::destroy($petugas->id);
        return redirect('petugas')->with('status','Data Petugas Berhasil Dihapus');
    }
}
