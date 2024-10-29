
@extends('layouts/app')

@section('content')
<div class="container-fluid">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
    <h6 class="m-0 font-weight-bold text-primary">Lihat Data</h6>
    
    <div class="dropdown ml-auto">
        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Urutkan
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <form action="{{ route('pencatatan.lihat', ['id' => $id_skpd]) }}" method="GET">
                    <select name="filter" id="filter" class="dropdown-item" onchange="this.form.submit()">
                        <option value="terbaru" {{ request('filter') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="bulan" {{ request('filter') == 'bulan' ? 'selected' : '' }}>Perbulan</option>
                    </select>
                </form>
        </div>
    </div>
</div>

    <div class="card-body">
        <div class="table-responsive">
        <div class="d-flex align-items-center">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('pencatatan.input2', $id_skpd) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary ml-auto">
        <i class="fas fa-download fa-sm text-white-50"></i>Input</a> 
        </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Dokumen</th>
                        <th>Judul Publikasi</th>
                        <th>Link Publikasi</th>
                        <th>Link Metadata</th>
                        <th>Link Rekomendasi</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!<tbody>
                    <?php $no = 1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->tahun_pengumpulan}}</td>
                            <td>
                                @if ($d->file)
                                    <a href="{{ asset('file/' . $d->file) }}">Lihat Dokumen</a>
                                @else
                                    Belum Mengumpulkan Dokumen
                                @endif
                            </td>
                            <td>{{$d->judul_publikasi}}</td>
                            <td><a href="{{ $d->link_publikasi }}">{{ $d->link_publikasi }}</a></td>
                            <td><a href="{{ $d->link_metadata }}">{{ $d->link_metadata }}</a></td>
                            <td><a href="{{ $d->link_rekomendasi }}">{{ $d->link_rekomendasi }}</a></td>
                            <td></td>
                            <td>{{$d->keterangan_pengumpulan}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
