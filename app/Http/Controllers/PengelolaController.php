<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\skpdModel;
use Illuminate\Http\Request;
class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tables()
    {
        //
        $skpd = skpdModel::with('data')->get();
        return view('tables', compact('skpd',));

    }
    public function submit(Request $request){
        $validateData =$request->validate([
            'nip' =>'required',
            'nama_pengelola' => 'required',
            'kontak_pengelola' => 'required',
            'nama_skpd' => 'required',
            'alamat_skpd' => 'required',


        ]);

        $skpd = new skpdModel();
        $skpd->nip = $request->nip;
        $skpd->nama_pengelola = $request->nama_pengelola;
        $skpd->kontak_pengelola = $request->kontak_pengelola;
        $skpd->nama_skpd = $request->nama_skpd;
        $skpd->alamat_skpd = $request->alamat_skpd;

        $skpd->save();
        return redirect()->route('tables');
    }
     public function input($id)
    {
        //
        $skpd = skpdModel::find($id);
        return view('pencatatan.input',compact('skpd'));
    }
    public function klik(Request $request,$id){
        if ($request->hasFile('file')) {
            
            $file = $request->file('file');
            $file_ekstensi = $file->extension();
            $file_nama = date('ymdhis') . "." . $file_ekstensi;
            
            $file->move(public_path('file'), $file_nama);
        } else {
            
            $file_nama = null;
        }

        $data = new data();
        $data->id_skpd = $id;
        $data->tahun_pengumpulan = $request->tahun_pengumpulan;
        $data->tanggal_pengumpulan = $request->tanggal_pengumpulan;
        $data->keterangan_pengumpulan = $request->keterangan_pengumpulan;
        $data->judul_publikasi = $request->judul_publikasi;
        $data->link_publikasi = $request->link_publikasi;
        $data->link_metadata = $request->link_metadata;
        $data->link_rekomendasi = $request->link_rekomendasi;
        $data->file = $file_nama;

        if($request->status_pengumpulan == 'sudah') {
            $data->status_pengumpulan = 'sudah';
        } elseif($request->status_pengumpulan == 'sedang_dikerjakan') {
            $data->status_pengumpulan = 'sedang_dikerjakan';
        }

        $data->save();
        return redirect()->route('tables',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    
    public function tambah()
    {
        //
        return view('pencatatan.tambah');
    }


    public function delete($id)
    {
       
        $skpd = skpdModel::find($id);
        
        if ($skpd) {
          
            $skpd->data()->delete(); 
            $skpd->delete();
        }
    
        return redirect()->route('tables')->with('success', 'Data berhasil dihapus.');
    }
    
    public function update2($id)
    {
        //
        $data = data::find($id);
        return view('pencatatan.update',compact('data'));
    }
    public function update3(Request $request, $id) {
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_ekstensi = $file->extension();
            $file_nama = time() . "." . $file_ekstensi;
    
            $file->move(public_path('file'), $file_nama);
        } else {
            $file_nama = null; 
        }
    
      
        $data = data::where('id_data', $id)->first();
        $data->tahun_pengumpulan = $request->tahun_pengumpulan;
        $data->tanggal_pengumpulan = $request->tanggal_pengumpulan;
        $data->keterangan_pengumpulan = $request->keterangan_pengumpulan;
        $data->judul_publikasi = $request->judul_publikasi;
        $data->link_publikasi = $request->link_publikasi;
        $data->link_metadata = $request->link_metadata;
        $data->link_rekomendasi = $request->link_rekomendasi;
        $data->file = $file_nama;
    
        if ($request->status_pengumpulan == 'sudah') {
            $data->status_pengumpulan = 'sudah';
        } elseif ($request->status_pengumpulan == 'sedang_dikerjakan') {
            $data->status_pengumpulan = 'sedang_dikerjakan';
        }
    
        $data->save();
    
        return redirect()->route('tables', compact('data'));
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
    public function updat(Request $request, skpdModel $pengelolaModel)
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
