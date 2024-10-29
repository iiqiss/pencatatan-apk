<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\skpdModel;
use App\Models\status;
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
    return view('pencatatan.hubungi', compact('skpd'));
    
}
public function tampil($id)
{
    $data = Data::where('id_data', $id)->first();
    $status = Status::where('id_status', $id)->first(); 
    if (!$status) {
        session()->flash('alert', 'Pastikan Anda telah mengonfirmasi status.');
    }
    return view('pencatatan.tampil', compact('status'));
}
public function tap(Request $request,$id)
{
    $status = data::find($id);
    $status->nip = $request->nip;
    $status->nama_karyawan = $request->nama_karyawan;
    $status->kontak_karyawan = $request->kontak_karyawan;
    $status->save();

    return redirect()->route('pencatatan.tampil');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input2($id)
    {
        //
        $status = status::find($id);
        if (!$status) {
            return view('status')->with('error', 'Pastikan Anda telah mengonfirmasi status.');
        }
        return view('pencatatan.input2',compact('status'));
    }
    public function nott(Request $request,$id)
    {
        if ($request->hasFile('file')) {
            
            $file = $request->file('file');
            $file_ekstensi = $file->extension();
            $file_nama = date('ymdhis') . "." . $file_ekstensi;
            
            $file->move(public_path('file'), $file_nama);
        } else {
            
            $file_nama = null;
        }

        $data = new data();
        $data->id_status = $id;
        $data->judul_publikasi = $request->judul_publikasi;
        $data->link_publikasi = $request->link_publikasi;
        $data->link_metadata = $request->link_metadata;
        $data->link_rekomendasi = $request->link_rekomendasi;
        $data->file = $file_nama;
        $data->save();
        return redirect()->route('pencatatan.lihat', ['id' => $id]);
    }
    public function lihat(Request $request, $id_skpd)
{
    $filter = $request->input('filter'); 

    $query = Data::where('id_skpd', $id_skpd);

    if ($filter == 'terbaru') {
        $data = $query->orderBy('created_at', 'desc')->get();
    } elseif ($filter == 'bulan') {
        $data = $query->orderByRaw('MONTH(created_at) DESC')->get();
    } else {
        $data = $query->orderBy('created_at', 'DESC')->get();
    }

    return view('pencatatan.lihat', compact('data', 'id_skpd',));
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
