@extends('main.auth&regis.sub-landing')
@section('body')

<body>
@endsection
@section('content')
<div class=" mt-5 auth-page-wrapper pt-5" style="background-color:white;">
    <!-- auth page bg -->
    

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class=" mt-4">
                    
                        <div class=" p-4"> 
                            <div class="text-center mt-2">
                                <h1 >Selamat Datang</h1>
                                <p class="text-muted">Silahkan masuk ke aplikasi menggunakan akun anda</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="index.html">
    
                                    <div class="mb-3">
                                    <div>
                                    <label class="form-label" for="password-input">E-mail</label>
<input type="text" class="form-control rounded-pill " id="exampleInputrounded" placeholder="Enter your email">
<label for="exampleInputrounded" class=" mt-2 form-label">*Masukkan email anda yang telah terverifikasi</label>
</div>
                                    </div>
            
                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control  rounded-pill pe-5" placeholder="Enter password" id="password-input">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle" ></i></button>
                                        </div>
                                        <div class="float-end">
                                            <a href="{{ url("/site-construction") }}" class="text-muted">Forgot password?</a>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-lg w-100 rounded-pill  waves-effect waves-light" style="background-color:#95AE36; color:white;">Success</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Tidak Memiliki Akun ? <a href="{{ url("/site-construction") }}" class="fw-semibold text-primary text-decoration-underline"> Daftar Yuk </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
    @endsection
    @section('script')
    <script src="assets/js/pages/password-addon.init.js"></script>
    @endsection