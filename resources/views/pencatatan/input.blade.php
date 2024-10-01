<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengelola</title>
    <link rel="stylesheet" href="{{asset('bootstrap2/css/bootstrap.css')}}">
</head>
<body>
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
                    <input type="hidden" name="id_skpd" value="{{ $skpd->id_skpd}}">
                    <label>Tahun Pengumpulan</label>
                    <input type="number" name="tahun_pengumpulan" class="form-control mb-2">
                    <label>Tanggal Pengumpulan</label>
                    <input type="date" name="tanggal_pengumpulan" class="form-control mb-2">
                    <label>Status Pengumpulan</label>
                    <select name="status_pengumpulan" class="form-control">
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                    <option value="sudah">Sudah</option>
                    </select>
                    <label>Keterangan</label>
                    <input type="text" name="keterangan_pengumpulan" class="form-control mb-2">
                    <div class="form-group">
                    <label for="file">Input File</label>
                    <input type="file" name="file" id="file" class="form-control-file" >
                    </div>
                    <label>Judul Publikasi</label>
                    <input type="text" name="judul_publikasi" class="form-control mb-2">
                    <label>Link Publikasi</label>
                    <input type="url" name="link_publikasi" class="form-control mb-2">
                    <label>Link Metadata</label>
                    <input type="url" name="link_metadata" class="form-control mb-2">
                    <label>Link Rekomendasi</label>
                    <input type="url" name="link_rekomendasi" class="form-control mb-2">
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


