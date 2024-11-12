<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\skpdModel;
use Illuminate\Http\Request;

class Pengelola2Controller extends Controller
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
        return view('pencatatan.hubungi',compact ('pengelola'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input2($id)
    {
        //
        $data = skpdModel::find($id);
        if (!$data) {
            return view('data')->with('error', 'Pastikan Anda telah mengonfirmasi status.');
        }
        return view('pencatatan.input2',compact('data'));
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
        $data->id_skpd = $id;
        $data->tahun_pengumpulan = $request->tahun_pengumpulan;
        $data->judul_publikasi = $request->judul_publikasi;
        $data->link_publikasi = $request->link_publikasi;
        $data->link_metadata = $request->link_metadata;
        $data->link_rekomendasi = $request->link_rekomendasi;
        $data->keterangan_pengumpulan = $request->keterangan_pengumpulan;
        $data->file = $file_nama;
        $data->save();
        return redirect()->route('pencatatan.lihat', ['id_skpd' => $id]);

        
    }
    public function lihat(Request $request, $id_skpd)
    {
        $filter = $request->input('filter'); 
    
        $skpd = SkpdModel::find($id_skpd);
        $data = Data::where('id_skpd', $id_skpd)
        ->get()
        ->map(function($item) {
            if (!$item->file) {
               
                $item->status_pengumpulan = 'belum';
            } elseif (empty($item->judul_publikasi) || empty($item->link_publikasi) || empty($item->link_metadata) || empty($item->link_rekomendasi)) {
                
                $item->status_pengumpulan = 'belum_lengkap';
            } else {
               
                $item->status_pengumpulan = 'sudah';
            }
            return $item;
        });
    
        if ($filter == 'terbaru') {
            $data = $data->sortByDesc('created_at');
        } elseif ($filter == 'terlama') {
            $data = $data->sortBy('created_at');
        } elseif ($filter == 'pertahun') {
            $data = $data->sortBy('tahun_pengumpulan');
        }
        
                
    
        return view('pencatatan.lihat', compact('data', 'id_skpd', 'skpd'));
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
