<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\skpdModel;
use App\Models\PengelolaModel;
use Illuminate\Http\Request;

class Pengelola2Contoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function pengelola()
    {
        //
        $pengelola = PengelolaModel::all();
        return view('pencatatan.pengelola',['pengelola' => $pengelola]);
    }
    public function enter(Request $request)
{
    $validateData =$request->validate([
        'nip' =>'required|unique:pengelola,nip',
        'nama_pengelola' => 'required',
        'kontak_pengelola' => 'required',
        'nama_dinas' => 'required',
    ]);
    $pengelola = new PengelolaModel();
    $pengelola->nip = $request->nip;
    $pengelola->nama_pengelola = $request->nama_pengelola;
    $pengelola->kontak_pengelola = $request->kontak_pengelola;
    $pengelola->nama_dinas = $request->nama_dinas;
    $pengelola->save();

    return redirect()->route('pencatatan.hubungi');
}
    public function hubungi()
    {
        //

        return view('pencatatan.hubungi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function show(PengelolaModel $pengelolaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PengelolaModel $pengelolaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengelolaModel $pengelolaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengelolaModel $pengelolaModel)
    {
        //
    }
}
