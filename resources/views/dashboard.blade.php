@extends('layouts/app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Judul Dashboard -->
        <h1 class="h3 mb-0 text-gray-800"></h1>

        <!-- Tombol Konfirmasi dan Dropdown Tahun -->
        <div class="d-flex">
            <!-- Tombol Konfirmasi -->
            <a href="{{ route('tables') }}" class="btn btn-sm btn-primary mr-2">
                <i class="fas fa-download fa-sm text-white-50"></i> Konfirmasi
            </a>

            <!-- Dropdown Tahun -->
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tahun
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">2024</a>
                    <a class="dropdown-item" href="#">2023</a>
                    <a class="dropdown-item" href="#">2022</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="d-flex align-items-center">
</div>
<div class="row">

    <!-- Bar Chart -->
    <div class="col-lg-12 mb-4"> <!-- Menggunakan full width -->
<!-- Area Chart -->
        <!-- Card Header - Dropdown -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div>
            <div class="card-body d-flex justify-content-center"> <!-- Memastikan chart di tengah -->
                <div class="chart-bar" style="width: 100%; max-width: 800px;"> <!-- Ukuran disesuaikan -->
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
            <hr>
            Styling for the bar chart can be found in the
            <code>/js/demo/chart-bar-demo.js</code> file.
        </div>
    </div>
    <!-- Projects Section -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-16" style="width: 205%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Belum Mengumpulkan<span class="float-right">45%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Sedang Dikerjakan<span class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Sudah Dikumpulkan<span class="float-right">55%</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
                <hr>
                Styling for the bar chart can be found in the
                <code>/js/demo/chart-bar-demo.js</code> file.
            </div>
        </div>
    </div>
        <!-- Card Body -->
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
  
</div>
</div>

@endsection