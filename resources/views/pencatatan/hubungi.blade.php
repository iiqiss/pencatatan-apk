@extends('layouts/app')
@section('content')
<div class="container-fluid">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hubungi Pengelola</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tbody>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        </tr>
                        
                        <tr>
                           
                            <td>1</td>
                            <td>{{$skpd->nip}}</td>
                            <td>{{$skpd->nama_pengelola}}</td>
                            <td>{{$skpd->kontak_pengelola}}</td>
                        </tr>
                        
                    </tbody>
                    
                </thead>
            </table>
       </div>
    </div>


</div>

@endsection