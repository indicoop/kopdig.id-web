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
                <img src="assets/images/landing-koperasi/judul.png" alt="opening" class="img-fluid img-responsive" height="120">
                    <h1 class="mt-1 ff-secondary fw-semibold lh-base">Monitoring dan Manage anggota anda dengan lebih mudah </h1>
                    <a href="{{ url("/daftar-koperasi") }}" class="mt-3 btn btn-lg" style="background-color:#95AE36; color:white;">Daftarkan Koperasi Anda</a>
                </div>
            </div>
            <div class="col-sm-6"><img src="assets/images/landing-koperasi/banner.png" alt="opening" class="img-fluid">
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
    <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-bold lh-base">Fitur Andalan Kopdig Koperasi </h1>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row mt-4" id="bagian3koperasi">
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-koperasi/admin.png" alt=""
                            class="animate__animated animate__bounce img-fluid"></span>
                    <div class="card-body p-4">

                        <div class="mx-auto mb-4 position-relative" id="font2">
                            <h4 class="mt-4">Dashboard </h4>
                            <h4 class="mt-4">Menu - menu yang lengkap dan user friendly </h4><br>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-koperasi/user.png" alt=""
                            class=" animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4 ">
                        <div class="mx-auto mb-4 position-relative" id="font1">
                            <h4 class="mt-4">Management User </h4>
                            <h4 class="mt-4">dokumentasi anggota cepat dan tertata </h4><br>
                        </div>
                        
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-koperasi/pay.png" alt=""
                            class="animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4 ">
                        <div class="mx-auto mb-4 position-relative" id="font3">
                        <h4 class="mt-4">Transparasi </h4>
                            <h4 class="mt-4">Alur pengelolaan keuangan koperasi dapat di ketahui semua anggota </h4>
                        </div>
                        
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-lg-3 col-sm-3 none">
                <div class="card hijau">
                    <span class="card-notify-year"><img src="assets/images/landing-koperasi/settings.png" alt=""
                            class="animate__animated animate__bounce img-fluid "></span>
                    <div class="card-body p-4 ">
                        <div class="mx-auto mb-4 position-relative" id="font3">
                            <h4 class="mt-4">Costum Tampilan  </h4>
                            <h4 class="mt-4">Tampilan yang bisa di sesuaikan sesuai dengan kebutuhan koperasi. </h4>
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



    

    </div>
    <!-- end layout wrapper -->
</body>


    @endsection
    @section('script')
    @endsection
