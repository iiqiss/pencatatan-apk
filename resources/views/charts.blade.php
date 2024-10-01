@extends('layouts/app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Charts</h1>
<div class="d-flex align-items-center">
    <h1 class="h3 mb-0 text-gray-800"></h1>
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
<!-- Content Row -->
<div class="row">


    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <!-- Bar Chart -->
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

    </div>

    <!-- Donut Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                </div>
                <hr>
                Styling for the donut chart can be found in the
                <code>/js/demo/chart-pie-demo.js</code> file.
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-4">

    <!-- Project Card Example -->

    <div class="card shadow mb-16" style= "width: 205%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">Belum Mengumpulkan<span
                    class="float-right">45%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Sedang Dikerjakan<span
                class="float-right">40%</span></h4>
            <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Sudah Dikumpulkan<span
                    class="float-right">55%</span></h4>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
 
    <!-- Color System -->
</div>
</div>

</div>
@endsection