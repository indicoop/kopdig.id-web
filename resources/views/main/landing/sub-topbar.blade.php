<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar" style="background-color:#ffff">
            <div class="container">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <img src="assets/images/logo-header.png" class="img-responsive card-logo card-logo-dark" alt="logo dark" height="30">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold active" href="{{ url("/") }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
    <a class="nav-link fs-15 fw-semibold nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{ url("/koperasi") }}">Layanan Koperasi</a></li>
      <li><a class="dropdown-item" href="{{ url("/simpanpinjam") }}">Layanan Simpan Pinjam</a></li>
      <li><a class="dropdown-item" href="{{ url("/market") }}">layanan Market Koperasi</a></li>
    </ul>
  </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold" href="{{ url("/site-construction") }}">Berita dan Kegiatan</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="{{ url("/login-koperasi") }}"
                            class="btn btn-link fw-medium fs-15 fw-semibold " style="color:#95AE36;">Masuk</a>
                        <a href="{{ url("/site-construction") }}" class="btn" style="background-color:#95AE36; color:white;">Daftar</a>
                    </div>
                </div>

            </div>
        </nav>