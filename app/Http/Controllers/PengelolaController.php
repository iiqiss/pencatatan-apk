<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Pengelola;
use App\Http\Controllers\Controller;

use App\Models\data;
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
    public function tables(Request $request)
    {
        $query = skpdModel::query();
    
        if ($request->has('filter')) {
            $filter = $request->input('filter');
    
            if ($filter == 'terbaru') {
                $query->orderBy('created_at', 'DESC');
            } elseif ($filter == 'tahun') {
                $currentYear = date('Y');
                $query->whereYear('created_at', $currentYear);
            }
        } else {

            $query->orderBy('created_at', 'DESC');
        }
    
      
        $skpd = $query->get();
    
        return view('tables', compact('skpd'));
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
    // public function destroy(PengelolaModel $pengelolaModel)
    // {

    // }
}
