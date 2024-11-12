
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
                        <th>Nama Dinas</th>
                    </tr>
                    <?php $no = 1 ?>
                    @foreach($pengelola as $no => $item)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->nama_pengelola }}</td>
                            <td>{{ $item->kontak_pengelola }}</td>
                            <td>{{ $item->nama_dinas }}</td>
                        </tr>
                    @endforeach
                </thead>
            </table>
       </div>
    </div>


</div>

@endsection