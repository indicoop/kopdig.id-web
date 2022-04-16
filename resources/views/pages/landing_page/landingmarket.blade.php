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
        <div class="row justify-content-center" id="bagian1market">
            <div class="col-sm-6 mt-4" >
                <div class="mt-5">
                <img src="assets/images/landing-market/judul.png" alt="opening" class=" img-fluid img-responsive" height="120">
                    <h1 class="mt-1 ff-secondary fw-semibold lh-base">Jutaan produk berkualitas untuk menunjang bisnis anda </h1>
                    <a href="{{ url("/site-construction") }}" class="mt-3 btn btn-lg" style="background-color:#95AE36; color:white;">Buka Kopdig market</a>
                </div>
            </div>
            <div class="col-sm-6 mt-2"><img src="assets/images/landing-market/market1.png" alt="" class="img-fluid img-responsive">
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
    <div class="row">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                <h1 class="mt-5 ff-secondary fw-bold lh-base" style="text-align:left;">Fitur Kopdig <i style="color:#95AE36">Market <i></h1>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row mt-4" id="bagian3koperasi">
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-market/brand.png" alt=""
                            class="animate__animated animate__bounce img-fluid"></span>
                    <div class="card-body p-4">

                        <div class="mx-auto mb-4 position-relative" id="font2">
                            <h4 class="mt-4">Katalog Produk </h4>
                            <h4 class="mt-4">Find your needs and make purchases <i style="color:#95AE36">quickly</i> and <i style="color:#95AE36">safely</i> </h4><br>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-market/token.png" alt=""
                            class="animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4 mt-4">
                        <div class="mx-auto mb-4 position-relative" id="font3">
                        <h4 class="mt-5">Point </h4>
                            <h4 class="mt-3">Hasil Point yang didapat </h4>
                        </div>
                        
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-lg-3 col-sm-3 none">
            </div>
            <!-- end col -->
        </div>
        <div class="row mt-4" id="bagian3koperasi">
            <div class="col-lg-3 col-sm-3 none">
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-market/online.png" alt=""
                            class=" animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4">
                        <div class="mx-auto mb-4 position-relative" id="font1">
                            <h4 class="mt-4">Custom Marketplace </h4>
                            <h4 class="mt-4">mengatur tampilan sesuai kebutuhan koperasi </h4><br>
                        </div>
                        
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
            </div>
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-market/cashless.png" alt=""
                            class="animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4 mt-4">
                        <div class="mx-auto mb-4 position-relative" id="font3">
                            <h4 class="mt-5">Payment Gateway  </h4>
                            <h4 class="mt-5">Transaksi Online </h4>
                        </div>
                       
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@endsection