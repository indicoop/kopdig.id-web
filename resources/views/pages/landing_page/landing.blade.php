@extends('main.landing.main-landing')
@section('body')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@endsection
@section('content')
    
        <section class="section bg-light" id="home">
            <div class="container">
                <div class="row justify-content-center" id="bagian1">
                    <div class="col-sm-6 mt-4" >
                        <div class="mt-5"  style="top: 150px;">
                            <h1 class="mt-5 ff-secondary fw-bold lh-base">Platform Terpercaya
                                Untuk Meningkatkan
                                Mutual Trust</h1>
                            <p class=" mt-5 text-muted">kopdig.id adalah sebuah platform koperasi digital yang bertujuan
                                untuk mengoptimalisasikan fungsi dan efisiensi dari suatu koperasi. </p>
                            <a href="{{ url("/daftar-koperasi") }}" class="mt-3 btn btn-lg" style="background-color:#95AE36; color:white;">Daftar</a>
                        </div>
                    </div>
                    <div class="col-sm-6"><img src="assets/images/openingimg01.png" alt="opening" class="img-fluid img-responsive">
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end team -->


        <!-- start client section -->
        <section class="section" id="#">
            <div class="container">
                <div class="row" id="bagian2">
                    <div class="col-sm-8">
                        <div class="mt-5 ">
                            <h1 class="mt-5 ff-secondary fw-bold lh-base">Kenapa harus bergabung dengan Kopdig.id?</h1>
                            <p class=" mt-5 ff-secondary">Kopdig.id adalah sebuah platform koperasi digital yang
                                menyediakan fitur bagi pengguna untuk membuat marketplace, melakukan transaksi penjualan
                                dan investasi baik pengelola koperasi maupun anggota.</p>
                            <a href="#" class="link">
                                <span class="mask">
                                    <div class="link-container">
                                        <span class="link-title1 title">Yuk Kita Jelajahi Kopdig.id</span>
                                        <span class="link-title2 title link">Yuk Kita Jelajahi Kopdig.id</span>
                                    </div>
                                </span>
                                <div class="link-icon link">
                                    <i class='fas fa-angle-right icon'></i>
                                    <i class='fas fa-angle-double-right icon'></i>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4"><img src="assets/images/openingimg02.png" alt="opening" class="img-fluid img-responsive">
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end client section -->

        <section class="section bg-light" id="layanan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-bold lh-base">Layanan Platform Kami </h1>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row mt-4" id="bagian3">
                    <div class="col-lg-4 col-sm-4 none">
                        <div class="card hijau">
                            <span class="card-notify-year"><img src="assets/images/layananicon1.png" alt=""
                                    class="animate__animated animate__bounce img-fluid img-responsive"></span>
                            <div class="card-body p-4">

                                <div class="mx-auto mb-4 position-relative" id="font2">
                                    <img src="assets/images/kopdigkoperasi.png" alt="" class="img-fluid img-responsive">

                                    <h4 class="mt-4">Monitoring dan Manage anggota anda dengan lebih mudah </h4>
                                </div>
                                <div class="text-center">
                                    <a href="{{ url("/koperasi") }}" type="button" class="btn btn-success btn-lg mt-2  mx-auto">Saya Mau
                                        Baca</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-sm-4 none">
                        <div class="card hijau">
                            <span class="card-notify-year"><img src="assets/images/layananicon2.png" alt=""
                                    class=" animate__animated animate__bounce img-fluid img-responsive "></span>
                            <div class="card-body p-4 ">
                                <div class="mx-auto mb-4 position-relative" id="font1">
                                    <img src="assets/images/kopdigsimpanpinjam.png" alt="" class="img-fluid img-responsive">
                                    <h4 class="mt-4">Layanan peminjaman dan penyimpanan dana yang ditujukan untuk para
                                        anggota </h4>
                                </div>
                                <div class="text-center">
                                    <a href="{{ url("/simpanpinjam") }}" type="button" class="btn btn-success btn-lg mt-2  mx-auto">Saya Mau
                                        Baca</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-sm-4 none">
                        <div class="card hijau">
                            <span class="card-notify-year"><img src="assets/images/layananicon3.png" alt=""
                                    class="animate__animated animate__bounce img-fluid img-responsive "></span>
                            <div class="card-body p-4 ">
                                <div class="mx-auto mb-4 position-relative" id="font3">
                                    <img src="assets/images/kopdigmarket.png" alt="" class="img-fluid img-responsive">
                                    <h4 class="mt-4">Jutaan produk berkualitas untuk menunjang bisnis Anda </h4>
                                </div>
                                <div class="text-center">
                                    <a href="{{ url("/market") }}" type="button" class="btn btn-success btn-lg mt-2  mx-auto">Saya Mau
                                        Baca</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
    </div>
    <!-- end container -->
    </section>
    <!-- end services -->
    <section class="section1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-bold lh-base">Testimoni Dari Mereka </h1>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row mt-5" id="bagian4">
                <div class="col-lg-4 col-sm-4">
                    <div class="card putih">
                        <span class=" avatar-xl profile-testimoni"><img src="assets/images/users/avatar-10.jpg" alt=""
                                class="img-fluid rounded-circle gambar-testimoni"></span>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="mt-3">“ Monitoring anggota dan kerjasama antara investor dengan client sangat
                                    bermanfaat ” </h4>
                                <h4 class="mt-4 ff-secondary "> Muhammad Saiful Rizal S.E </h4>
                                <h5 class="mt-0  text-muted" style="color:#EDF3D6"> Manager PT Citra Indah </h5>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-sm-4">
                    <div class="card putih">
                        <span class=" avatar-xl profile-testimoni"><img src="assets/images/users/avatar-10.jpg" alt=""
                                class="img-fluid rounded-circle gambar-testimoni"></span>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="mt-3">“Transaksi Simpan pinjam sangat mudah bisa dilakukan di mana saja dan
                                    kapan pun sesuka hati ”</h4>
                                <h4 class="mt-4 ff-secondary "> Bustholil Arifin S.E </h4>
                                <h5 class="mt-0  text-muted" style="color:#EDF3D6"> Ketua Dinas Sosial </h5>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-sm-4">
                    <div class="card putih">
                        <span class=" avatar-xl profile-testimoni"><img src="assets/images/users/avatar-10.jpg" alt=""
                                class="img-fluid rounded-circle gambar-testimoni"></span>
                        <div class="card-body p-4">
                            <div class="text-center" id="card1">
                                <h4 class="mt-3" id="h4" >“Karena Kopdig, digitalisasi sistem Koperasi saya dengan para anggota
                                    saya jadi terbantu ”</h4>
                                <h4 class="mt-5 ff-secondary "> Dita Keisya Azzahrra </h4>
                                <h4 class="mt-0  "> </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
        </div>
        <!-- end row -->
        </div>
    </section>

    <!-- start client section -->
    <section class="section" id="berita">
        <div class="container">
        <h1 class="mt-0 ff-secondary fw-bold lh-base">Berita dan Kegiatan</h1>
        <div class="" style="float: right">
        <a href="{{ url("/site-construction") }}" class="link">
                                <span class="mask">
                                    <div class="link-container" >
                                        <span class="link-title1 title">Artikel lainnya</span>
                                        <span class="link-title2 title link">Next</span>
                                    </div>
                                </span>
                                <div class="link-icon link">
                                    <i class='fas fa-angle-right icon'></i>
                                    <i class='fas fa-angle-double-right icon'></i>

                                </div>
                            </a>
                    </div><br/>
        <div class="row">       
        <div class="mt-2 mb-3 ">
                        
                </div>
        </div>
            <div class="row ">                
                <div class="mt-2 col-sm-6 col-xl-4">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body hijau2">
                            <h4 class="card-title mb-2">Web Developer</h4>
                            <p class="card-text text-muted">07 April 2022</p>
                            <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot
                                near can. Spirit her entire her called.</p>
                                <hr>
                                <div class="text-end">
                                <a href="{{ url("/site-construction") }}" >Selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                            </div>
                            
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="mt-2 col-sm-6 col-xl-4">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body hijau2">
                            <h4 class="card-title mb-2">Web Developer</h4>
                            <p class="card-text text-muted">07 April 2022</p>
                            <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot
                                near can. Spirit her entire her called.</p>
                                <hr>
                                <div class="text-end">
                                <a href="{{ url("/site-construction") }}" >Selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="mt-2 col-sm-6 col-xl-4">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body hijau2">
                            <h4 class="card-title mb-2">Web Developer</h4>
                            <p class="card-text text-muted">07 April 2022</p>
                            <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot
                                near can. Spirit her entire her called.</p>
                                <hr>
                                <div class="text-end">
                                <a href="{{ url("/site-construction") }}" >Selengkapnya <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- start services -->
    <!-- start cta -->
    <section class="py-5 position-relative putih" id="partner">
        <div class="container" id="bagian5">
            <div class="row gy-4">
                <div class="col">
                    <h4 class="mb-0 fw-bold lh-base">Partner kami</h4>
                </div>
                <div class="col">
                    <img src="assets/images/esolusindo.png" alt="" class="gambarmitra img-fluid img-responsive">
                    <img src="assets/images/logo.png" alt="" class=" gambarmitra img-fluid img-responsive">
                    <img src="assets/images/polije.png" alt="" class="gambarmitra img-fluid img-responsive">

                </div>

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start faqs -->
    <section class="section" id="pertanyaan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-bold">Pertanyaan Yang Sering Diajukan</h3>
                        <p class="text-muted mb-4">Kami memiliki banyak jaringan luas hubungan sehingga dapat memenuhi berbagai kebutuhan pelanggan dan mitra.</p>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row g-lg-5 g-4">
                <div class="col-lg">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0 me-1">
                            <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-bold">Pertanyaan Umum</h5>
                        </div>
                    </div>
                    <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                        id="genques-accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="genques-headingOne">
                                <button class="accordion-button fw-semibold fs-14 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="false"
                                    aria-controls="genques-collapseOne">
                                    Apa Saja Faktor-faktor Penentu Keberhasilan Koperasi?
                                </button>
                            </h2>
                            <div id="genques-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                <div class="accordion-body">
                                    A theme is a set of colors, fonts, effects, and more that can be applied to your
                                    entire presentation to give it a
                                    consistent, professional look. You've already been using a theme, even if you didn't
                                    know it: the default Office theme,
                                    which consists.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="genques-headingTwo">
                                <button class="accordion-button fw-semibold fs-14 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo"
                                    aria-expanded="false" aria-controls="genques-collapseTwo">
                                    Bagaimana indikator keberhasilan organisasi koperasi?
                                </button>
                            </h2>
                            <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                <div class="accordion-body">
                                    A story can have as many themes as the reader can identify based on recurring
                                    patterns and parallels within the story
                                    itself. In looking at ways to separate themes into a hierarchy, we might find it
                                    useful to follow the example of a
                                    single book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="genques-headingThree">
                                <button class="accordion-button fw-semibold fs-14 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#genques-collapseThree"
                                    aria-expanded="false" aria-controls="genques-collapseThree">
                                    Bagaimana sejarah perkembangan koperasi di Indonesia?
                                </button>
                            </h2>
                            <div id="genques-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                <div class="accordion-body">
                                    Theme features is a set of specific functionality that may be enabled by theme
                                    authors. Themes must register each
                                    individual Theme Feature that the author wishes to support. Theme support functions
                                    should be called in the theme's
                                    functions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end accordion-->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end faqs -->



    

    </div>
    <!-- end layout wrapper -->
</body>


    @endsection
    @section('script')
    @endsection
