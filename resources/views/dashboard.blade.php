@extends('layouts/app')
@section('content')
<div class="row">
<h1>Welcome to website</h1>

<!-- Earnings (Monthly) Card Example -->
</div>

<!-- Content Row -->

<div class="row">

<!-- Area Chart -->

</div>

<!-- Content Row -->
<div class="row">

<!-- Content Column -->

</div>
@endsection@extends('layouts/app')
@section('content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
<p class="mb-4">
<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="btn-group ml-auto">
        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tahun
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">2024</a>
            <a class="dropdown-item" href="#">2023</a>
            <a class="dropdown-item" href="#">2022</a>
        </div>
    </div>
</div>

</p>
</div>

<!-- Content Row -->
<div class="d-flex align-items-center">

</div>
<div class="row">

<!-- Area Chart -->

        <!-- Card Header - Dropdown -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
                <hr>
                Styling for the bar chart can be found in the
                <code>/js/demo/chart-bar-demo.js</code> file.
            </div>
        </div>
        <!-- Card Body -->


<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
  
</div>
</div>

<!-- Content Row -->
<div class="row">

<!-- Content Column -->

</div>
<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Belum <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Belum Lengkap<span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sudah <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
@endsection