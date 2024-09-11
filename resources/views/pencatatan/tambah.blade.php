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
                    <input type="text" name="nama_skpd" class="form-control mb-2">
                    <label>Alamat Dinas</label>
                    <input type="text" name="alamat_skpd" class="form-control mb-2">

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


