@extends('layouts/app')

@section('content')
<div class="container-fluid">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hubungi Karyawan</h6>
    </div>
    <div class="card-body">
        
        @if (session('alert'))
            <div class="alert alert-warning">
                {{ session('alert') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $status->nip ?? 'NIP tidak tersedia' }}</td>
                        <td>{{ $status->nama_karyawan ?? 'Nama tidak tersedia' }}</td>
                        @if ($status && $status->kontak_karyawan)
                        <td>
                        <a href="sms:{{ $status->kontak_karyawan }}">SMS</a> |
                        <a href="https://wa.me/{{ $status->kontak_karyawan }}">WhatsApp</a>
                        </td>
                        @else
                        <td>Kontak tidak tersedia</td>
                        @endif


                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
