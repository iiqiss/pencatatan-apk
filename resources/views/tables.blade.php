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
        <div class="d-flex justify-content-end">
</div>




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
                        <th>Data</th>
                        <th>Aksi</th>
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
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="{{route('pencatatan.lihat',$skpd->id_skpd)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary">Lihat</a> 
                        </td>
                        <td>
                        <button class="btn btn-success mb-2">Edit</button>
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