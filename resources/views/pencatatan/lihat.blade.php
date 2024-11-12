
@extends('layouts/app')
@section('content')
<div class="container-fluid">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
<div class="d-block"> 
<h6 class="m-0 font-weight-bold text-primary" style="font-size: 1.5rem; margin-bottom: 100rem;">Pengelola</h6>
    <h6 class="m-0 font-weight-bold text-primary">Nama : 
        <span class="text-muted">{{ $skpd->nama_pengelola }}</span>
    </h6>
    <h6 class="m-0 font-weight-bold text-primary">NIP: 
        <span class="text-muted">{{ $skpd->nip }}</span>
    </h6>
    <h6 class="m-0 font-weight-bold text-primary">Kontak: 
    <a href="sms:{{$skpd->kontak_pengelola}}" style="color:  #ffbb2f; text-decoration: underline;">SMS</a>
    <span style="margin: 0 03px;">|</span>
    <a href="https://wa.me/{{$skpd->kontak_pengelola}}" style="color: #25D366; text-decoration: underline;">WhatsApp</a>

    </h6>
</div>
<form action="{{ route('pencatatan.lihat', ['id_skpd' => $id_skpd]) }}" method="GET">
        <label for="filter">Urutkan:</label>
        <select name="filter" id="filter" onchange="this.form.submit()">
            <option value="terbaru" {{ request('filter') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
            <option value="terlama" {{ request('filter') == 'terlama' ? 'selected' : '' }}>Terlama</option>
            <option value="pertahun" {{ request('filter') == 'pertahun' ? 'selected' : '' }}>Pertahun</option>
        </select>
    </form>

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
                            <td>
                            @if($d->status_pengumpulan == 'sudah')
                               <span class="badge badge-success">Lengkap</span>
                            @elseif($d->status_pengumpulan == 'belum_lengkap')
                               <span class="badge badge-warning">Belum Lengkap</span>
                            @elseif($d->status_pengumpulan == 'belum')
                              <span class="badge badge-danger">Belum</span>
                            @endif
                            </td>



                            <td>{{$d->keterangan_pengumpulan}}</td>
                            <td>
                            <button class="btn btn-success mb-2">Edit</button>
                        <form action="" method="post">
                         @csrf
                         <button class="btn btn-sm btn-danger mb-2">Hapus</button>
                        </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
