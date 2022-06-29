<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\clinic;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $dokter=dokter::all();
        if($keyword){
            $dokter=dokter::where("nama_dokter","LIKE","%$keyword%")->get();
        }
        return view('dokter/index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinic=clinic::all();
        return view('dokter/create',compact('clinic'));
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
            'nama_dokter'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'tgl_lahir'=>'required',
            'spesialis'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
            'clinic'=>'required',
            'foto'=>'image|file|max:2048'
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //dokter::create($request->all());
        dokter::create([
            'nama_dokter'=>$request['nama_dokter'],
            'jk'=>$request['jk'],
            'alamat'=>$request['alamat'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'spesialis'=>$request['spesialis'],
            'no_hp'=>$request['no_hp'],
            'email'=>$request['email'],
            'username'=>$request['username'],
            'password'=>$request['password'],
            'clinic'=>$request['clinic'],
            'foto'=>$imgName
        ]);

        return redirect('/dokter')->with('status','Data dokter Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(dokter $dokter)
    {
        return view('dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(dokter $dokter)
    {
        $clinic=clinic::all();
        return view('dokter.edit', compact('dokter','clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dokter $dokter)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        dokter::where('id',$dokter->id)
        ->update(['nama_dokter'=>$request->nama_dokter,
        'jk'=>$request->jk,
        'alamat'=>$request->alamat,
        'tgl_lahir'=>$request->tgl_lahir,
        'spesialis'=>$request->spesialis,
        'no_hp'=>$request->no_hp,
        'email'=>$request->email,
        'username'=>$request->username,
        'password'=>$request->password,
        'clinic'=>$request->clinic,
        'foto'=>$imgName
        ]);
        return redirect('/dokter')->with('status', 'Data Dokter Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokter $dokter)
    {
        dokter::destroy($dokter->id);
        return redirect('dokter')->with('status','Data Dokter Berhasil Dihapus');
    }
}
