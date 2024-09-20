<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengelola</title>
    <link rel="stylesheet" href="{{asset('bootstrap2/css/bootstrap.css')}}">
</head>
<body>
<form action="{{route('pencatatan.enter')}}" method="post">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="text-center">Pengelola</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" name="nip" class="form-control mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama_pengelola" class="form-control mb-2">
                    <label>Kontak</label>
                    <input type="number" name="kontak_pengelola" class="form-control mb-2">
                    <label>Nama Dinas</label>
                    <input type="text" name="nama_dinas" class="form-control mb-2">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <button type="submit"class="btn btn-primary ">Kirim</button>
                <h1 class="h3 mb-0 text-gray-800"></h1>
                 <a href="{{route('pencatatan.input')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary">selanjutnya</a> 
            </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>


