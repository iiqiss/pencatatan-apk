@extends('layouts/app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>//-->

<!-- DataTales  -->
<!--<div class="card shadow mb-4">-->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
        <div class="d-flex align-items-center">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{route('pencatatan.tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary ml-auto">
        <i class="fas fa-download fa-sm text-white-50"></i>Tambah Dinas</a> 
        </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dinas</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>tahun</th>
                        <th>Dokumen</th>
                        <th>Input</th>
                        <th>update</th>
                        <th>Kontak Pengelola</th>
                        
                        <th>hapus</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                <?php $no = 1; ?>
                @foreach($skpd as $no=>$skpd)
                <tr>
                       <td>{{$no+1}}</td>
                       <td>{{$skpd->nama_skpd}}</td>
                       <td>{{$skpd->alamat_skpd}}</td>
                       <td>
                        @if($skpd->data?->status_pengumpulan == 'sudah')
                        <span class="badge badge-success">Sudah</span>
                        @elseif($skpd->data?->status_pengumpulan == 'sedang_dikerjakan')
                        <span class="badge badge-warning">Sedang Dikerjakan</span>
                        @else
                        <span class="badge badge-danger">Belum</span>
                        @endif
                       </td>
                       </td>
                       <td>{{$skpd->data?->keterangan_pengumpulan}}</td>
                       <td>{{$skpd->data?->tanggal_pengumpulan}}</td>
                       <td>{{$skpd->data?->tahun_pengumpulan}}</td>
                       <td>
                                    @if ($skpd->data?->file)
                                        <a href="{{ asset('file/' . $skpd->data->file) }}">Lihat Dokumen</a>
                                    @else
                                        Belum Mengumpulkan Dokumen
                                    @endif
                       </td>
                       <td>
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="{{route('pencatatan.input',$skpd->id_skpd)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary">Input</a> 
                        </td>
                        <td>
                            <h1 class="h3 mb-0 text-gray-800"></h1>
                            <a href="{{ route('pencatatan.update', $skpd->id_skpd) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary">update</a>
                        </td>
                        <td>
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="{{route('pencatatan.hubungi',$skpd->id_skpd)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary">Hubungi</a> 
                        </td>
                        <td>
                        <form action="{{route('pencatatan.delete',$skpd->id_skpd)}}" method="post">
                         @csrf
                         <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                        </td>
                </tr>
                 @endforeach
                </tbody>
            </table>
       </div>
    </div>
<!--</div>-->

</div>

@endsection