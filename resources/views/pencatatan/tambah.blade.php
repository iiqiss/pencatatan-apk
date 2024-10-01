<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengelola</title>
    <link rel="stylesheet" href="{{asset('bootstrap2/css/bootstrap.css')}}">
</head>
<body>
<form action="{{route('pencatatan.submit')}}" method="post">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="text-center">Dinas</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                <label>Nama Dinas</label>
                <input type="text" name="nama_skpd" class="form-control mb-2" required>
                <label>Alamat Dinas</label>
                <input type="text" name="alamat_skpd" class="form-control mb-2" required>
                <form action="{{route('pencatatan.enter')}}" method="post">
                <label>NIP</label>
                <input type="number" name="nip" class="form-control mb-2" required>
                <label>Nama</label>
                <input type="text" name="nama_pengelola" class="form-control mb-2" required>
                <label>Kontak</label>
                <input type="number" name="kontak_pengelola" class="form-control mb-2" required>
                </form>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit"class="btn btn-primary ">Kirim</button>
            </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>


