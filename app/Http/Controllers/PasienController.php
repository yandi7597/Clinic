<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $pasien=pasien::all();
        if($keyword){
            $pasien=pasien::where("nama_pasien","LIKE","%$keyword%")->get();
        }
        return view('pasien/index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien/create');
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
            'jk'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'foto'=>'image|file|max:2048'
        ]);
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        //pasien::create($request->all());
        pasien::create([
            'nama_pasien'=>$request['nama_pasien'],
            'jk'=>$request['jk'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'alamat'=>$request['alamat'],
            'no_hp'=>$request['no_hp'],
            'foto'=>$imgName
        ]);
        return redirect('/pasien')->with('status', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pasien $pasien)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        pasien::where('id',$pasien->id)
        ->update(['nama_pasien'=>$request->nama_pasien,
        'jk'=>$request->jk,
        'tgl_lahir'=>$request->tgl_lahir,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'foto'=>$imgName
        ]);
        return redirect('/pasien')->with('status', 'Data Pasien Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        pasien::destroy($pasien->id);
        return redirect('pasien')->with('status','Data Pasien Berhasil Dihapus');
    }
}
