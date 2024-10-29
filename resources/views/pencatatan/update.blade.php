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
<form action="{{ route('pencatatan.update3', ['id_skpd' => $status->id_skpd]) }}" method="post"  enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="text-center">Dokumen</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Status Pengumpulan</label>
                    <select name="status_pengumpulan" class="form-control">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                    <option value="sudah">Sudah</option>
                    </select>
                    <label>Keterangan</label>
                    <input type="text" name="keterangan_pengumpulan" class="form-control mb-2">
                    <div class="form-group">
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


