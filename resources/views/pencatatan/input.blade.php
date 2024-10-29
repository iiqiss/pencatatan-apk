<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengelola</title>
    <link rel="stylesheet" href="{{asset('bootstrap2/css/bootstrap.css')}}">
</head>
<body>

<div class="container mt-5">

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form action="{{ route('pencatatan.klik', ['id_skpd' => $skpd->id_skpd]) }}" method="post"  enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="text-center">Dokumen</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id_skpd" value="{{ $skpd->id_skpd}}" required>
                    <label>Status Pengumpulan</label>
                    <select name="status_pengumpulan" class="form-control" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                    <option value="sudah">Sudah</option>
                    </select>
                    <label>Keterangan</label>
                    <input type="text" name="keterangan_pengumpulan" class="form-control mb-2">
                    <div class="form-group">
                <form action="{{route('pencatatan.tap')}}" method="post">
                <label>NIP</label>
                <input type="number" name="nip" class="form-control mb-2" required>
                <label>Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control mb-2" required>
                <label>Kontak Karyawan</label>
                <input type="number" name="kontak_karyawan" class="form-control mb-2" required>
                </form>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit"class="btn btn-primary ">Input</button>
            </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>


