@extends('main.landing.sub-landing')
@section('css')
<link href="assets/css/customkoperasi.css" rel="stylesheet" type="text/css" />
@endsection
@section('body')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@endsection
@section('content')
<section class="putih" id="home">
    <div class="container">
        <div class="row justify-content-center" id="bagian1koperasi">
            <div class="col-sm-6 mt-4" >
                <div class="mt-5">
                <img src="assets/images/judul.png" alt="opening" class="img-fluid img-responsive" height="120">
                    <h1 class="mt-1 ff-secondary fw-semibold lh-base">Layanan peminjaman dan penyimpanan dana yang ditujukan untuk para anggotan </h1>
                    <a href="{{ url("/site-construction") }}" class="mt-3 btn btn-lg" style="background-color:#95AE36; color:white;">Buka Kopdig Simpan Pinjam</a>
                </div>
            </div>
            <div class="col-sm-6"><img src="assets/images/opening03.png" alt="opening" class=" mt-5 img-fluid">
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end team -->


<!-- start client section -->
<section class="putih" id="#">
    <div class="container">
    <div class="row ">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h1 class="mt-5 ff-secondary fw-bold lh-base" style="text-align:left;">Fitur Kopdig <i style="color:#95AE36">Simpan Pinjam <i></h1>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row mt-3 justify-content-center">                
        <div class="mt-2 col-xl-4">
            <!-- Simple card -->
            <div class="card">                        
                <div class="card-body hijau2">
                <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                    <h4 class="card-title mt-2 mb-2">Web Developer</h4>
                    <p class="card-text text-muted">Tahun 2022 | Fashion</p>                                
<div class="row">
<div class="col-lg-8">
<div class="row mt-5">
<div class="col-lg-4">
<p class="text-muted" style="font-size:12px;">Anggota</p>
<p class="text-muted">15</p>
</div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Transaksi</p>
<p class="text-muted">12.542</p></div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Modal</p>
<p class="text-muted">50 Jt</p></div>
</div>
</div>
<div class="col-lg-4">
<div id="area_chart_basic" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>   
</div>
</div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="mt-2 col-xl-4">
            <!-- Simple card -->
            <div class="card">                        
                <div class="card-body hijau2">
                <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                    <h4 class="card-title mt-2 mb-2">Web Developer</h4>
                    <p class="card-text text-muted">Tahun 2022 | Fashion</p>                                
<div class="row">
<div class="col-lg-8">
<div class="row mt-5">
<div class="col-lg-4">
<p class="text-muted" style="font-size:12px;">Anggota</p>
<p class="text-muted">15</p>
</div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Transaksi</p>
<p class="text-muted">12.542</p></div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Modal</p>
<p class="text-muted">50 Jt</p></div>
</div>
</div>
<div class="col-lg-4">
<div id="area_chart_basic2" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>   
</div>
</div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="mt-2 col-xl-4">
            <!-- Simple card -->
            <div class="card">                        
                <div class="card-body hijau2">
                <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                    <h4 class="card-title mt-2 mb-2">Web Developer</h4>
                    <p class="card-text text-muted">Tahun 2022 | Fashion</p>                                
<div class="row">
<div class="col-lg-8">
<div class="row mt-5">
<div class="col-lg-4">
<p class="text-muted" style="font-size:12px;">Anggota</p>
<p class="text-muted">15</p>
</div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Transaksi</p>
<p class="text-muted">12.542</p></div>
<div class="col-lg-4"><p class="text-muted"style="font-size:12px;">Modal</p>
<p class="text-muted">50 Jt</p></div>
</div>
</div>
<div class="col-lg-4">
<div id="area_chart_basic3" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>   
</div>
</div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
        @endsection
        @section('script')
         <!-- apexcharts -->
      <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
      <!-- for basic area chart -->
      <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

<!-- chartjs init -->
<script src="assets/js/pages/customecharts.init.js"></script> 
        @endsection
    