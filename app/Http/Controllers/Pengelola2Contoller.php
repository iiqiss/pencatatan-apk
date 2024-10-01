<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\skpdModel;
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
    public function pengelola($id)
    {
        //
        $skpd = skpdModel::find($id);
        return view('pencatatan.pengelola',compact('skpd'));
    }
    public function enter(Request $request,$id)
{
    $validateData =$request->validate([
        'nip' =>'required',
        'nama_pengelola' => 'required',
        'kontak_pengelola' => 'required',
    ]);
    $skpd = skpdModel::find($id);
    $skpd->nip = $request->nip;
    $skpd->nama_pengelola = $request->nama_pengelola;
    $skpd->kontak_pengelola = $request->kontak_pengelola;
    $skpd->save();

    return redirect()->route('pencatatan.hubungi');
}
public function hubungi($id)
{

    $skpd = skpdModel::where('id_skpd',$id)->first();
    //dd($skpd);
    return view('pencatatan.hubungi', compact('skpd'));
    
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
    public function show(skpdModel $pengelolaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(skpdModel $pengelolaModel)
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
    public function update(Request $request, skpdModel $pengelolaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengelolaModel  $pengelolaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(skpdModel $pengelolaModel)
    {
        //
    }
}
