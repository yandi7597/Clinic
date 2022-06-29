<?php

namespace App\Http\Controllers;

use App\Models\clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $clinic=clinic::all();
        if($keyword){
            $clinic=clinic::where("clinic","LIKE","%$keyword%")->get();
        }
        return view('clinic/index', compact('clinic'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinic/create');
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
            'nama'=>'required'
        ]);
        clinic::create($request->all());

        return redirect('/clinic')->with('status', 'Data Clinic Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function show(clinic $clinic)
    {
        return view('clinic.show', compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function edit(clinic $clinic)
    {
        return view('clinic.edit', compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clinic $clinic)
    {
        clinic::where('id',$clinic->id)
        ->update(['nama'=>$request->nama]);
        return redirect('/clinic')->with('status', 'Data Clinic Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinic $clinic)
    {
        clinic::destroy($clinic->id);
        return redirect('clinic')->with('status','Data Clinic Berhasil Dihapus');
    }
}
