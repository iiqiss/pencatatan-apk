<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Pengelola;
use App\Http\Controllers\Controller;

use App\Models\data;
use App\Models\PengelolaModel;
use App\Models\skpdModel;

use Illuminate\Http\Request;

class PengelolaController extends Controller
{

    public function index(){
       
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tables()
    {
        //
        $skpd = skpdModel::all();
        return view('tables', compact('skpd'));
        
    }
    public function submit(Request $request){
        $validateData =$request->validate([
            'nama_skpd' => 'required',
            'alamat_skpd' => 'required',
        ]);
        
        $skpd = new skpdModel();
        $skpd->nama_skpd = $request->nama_skpd;
        $skpd->alamat_skpd = $request->alamat_skpd;
    
        $skpd->save();
        return redirect()->route('tables');
    }
     public function input()
    {

        return view('pencatatan.input');
    }
    public function klik(Request $request){
        $validateData =$request->validate([
            'tahun_pengumpulan' =>'required',
            'tanggal_pengumpulan' => 'required',
            'keterangan_pengumpulan' => 'required',
            'judul_publikasi' => 'required',
            'link_publikasi' => 'required',
            'link_metadata' => 'required',
            'link_rekomendasi' => 'required',

        ]);
        $skpd = new data();
        $skpd->tahun_pengumpulan = $request->tahun_pengumpulan;
        $skpd->tanggal_pengumpulan = $request->tanggal_pengumpulan;
        $skpd->keterangan_pengumpulan = $request->keterangan_pengumpulan;
        $skpd->judul_publikasi = $request->judul_publikasi;
        $skpd->link_publikasi = $request->link_publikasi;
        $skpd->link_metadata = $request->link_metadata;
        $skpd->link_rekomendasi = $request->link_rekomendasi;
    
        $skpd->save();
        return redirect()->route('tables');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengelola()
    {
        //
        $pengelola = PengelolaModel::all();
        return view('pencatatan.pengelola',compact($pengelola));
    }
    public function tambah()
    {
        //
        return view('pencatatan.tambah');
    }
   
    
    public function delete($id)
    {
        //
        $skpd = skpdModel::find($id);
        $skpd->delete();
        return redirect()->route('tables');
        
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
