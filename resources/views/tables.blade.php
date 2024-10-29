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
    <div class="dropdown">
        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Urutkan
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <form action="{{ route('tables',) }}" method="GET">
                    <select name="filter" id="filter" class="dropdown-item" onchange="this.form.submit()">
                        <option value="terbaru" {{ request('filter') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="tahun" {{ request('filter') == 'tahun' ? 'selected' : '' }}>Pertahun</option>
                    </select>
                </form>
        </div>
    </div>
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
                        <form action="{{ route('pencatatan.delete', $skpd->id_skpd) }}" method="post">
                         @csrf
                         @method('DELETE')
                         <button class="btn btn-sm btn-danger" id="delete" type="button">Hapus</button>
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