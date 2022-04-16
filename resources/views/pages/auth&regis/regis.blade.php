@extends('main.auth&regis.sub-landing')
@section('css')
<link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/monolith.min.css" /> 
@endsection
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
                <div class=" form-steps">
                    <form action="#">
                        <div class="text-center pt-3 pb-4 mb-1">
                            <h2>Pendaftaran Online Koperasi</h2>
                            <p class="text-muted">Lengkapi form pendaftaran untuk mendaftarkan koperasimu</p>
                        </div>

                        <div id="custom-progress-bar" class="progress-nav mb-4">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%;background-color:#95AE36" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <ul class="nav  nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class=" nav-item" role="presentation">
                                    <button class="nav-link rounded-pill active"
                                        data-progressbar="custom-progress-bar" id="pills-gen-info-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button"
                                        role="tab" aria-controls="pills-gen-info" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill " data-progressbar="custom-progress-bar"
                                        id="pills-info-desc-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-info-desc" type="button" role="tab"
                                        aria-controls="pills-info-desc" aria-selected="false">2</button>

                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                        id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success"
                                        type="button" role="tab" aria-controls="pills-success"
                                        aria-selected="false">3</button>

                                </li>
                                <li class=" nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                        id="pills-success-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-success2" type="button" role="tab"
                                        aria-controls="pills-success" aria-selected="false">4</button>

                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                aria-labelledby="pills-gen-info-tab">
                                <div>
                                    <div class="mb-5">
                                        <div class="text-center pt-3 pb-1 ">
                                            <h4>Data Koperasi</h4>
                                        </div>
                                    </div>
                                    <span style="color:red">*</span>Detail Koperasi
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="exampleInputrounded" placeholder="Nama koperasi">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="exampleInputrounded" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">

                                            <input type="text" class="form-control  rounded-pill form-control-lg"
                                                placeholder="Tanggal/ Bulan/ Tahun" data-provider="flatpickr"
                                                data-date-format="d M, Y"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <textarea class="form-control " id="exampleFormControlTextarea5"
                                                placeholder="Alamat" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="exampleInputrounded" placeholder="Nomor badan hukum">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="exampleInputrounded" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">

                                            <input type="text" class="form-control  rounded-pill form-control-lg"
                                                placeholder="Tanggal/ Bulan/ Tahun" data-provider="flatpickr"
                                                data-date-format="d M, Y"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-select form-select-lg rounded-pill mb-3"
                                            aria-label="Default select example">
                                            <option selected>Search for services</option>
                                            <option value="1">Information Architecture</option>
                                            <option value="2">UI/UX Design</option>
                                            <option value="3">Back End Development</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-select form-select-lg rounded-pill mb-3"
                                            aria-label="Default select example">
                                            <option selected>Search for services</option>
                                            <option value="1">Information Architecture</option>
                                            <option value="2">UI/UX Design</option>
                                            <option value="3">Back End Development</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-select form-select-lg rounded-pill mb-3"
                                            aria-label="Default select example">
                                            <option selected>Search for services</option>
                                            <option value="1">Information Architecture</option>
                                            <option value="2">UI/UX Design</option>
                                            <option value="3">Back End Development</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <span style="color:red">*</span>Detail Koperasi
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab
nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to
                                        more info</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                aria-labelledby="pills-info-desc-tab">
                                <div>
                                    <div class="text-center">
                                        <div class="mb-5">
                                            <div class="text-center pt-3 pb-1 data-anggota-koperasi"
                                                id="data-anggota-koperasi">
                                                <h4 class="data-anggota-koperasi2">Data Anggota Koperasi</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                <div class="mb-2">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                <div class="mb-2">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                <div class="mb-2">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                <div class="mb-2">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                <div class="mb-2">
                                            <span style="color:red">*</span>Detail Koperasi
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button"
                                        class="btn btn-link text-decoration-none btn-label previestab"
                                        data-previous="pills-gen-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back
                                        to
                                        General</button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab
nexttab" data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                aria-labelledby="pills-success-tab">
                                <div>
                                    <div class="text-center">
                                        <div class="mb-5">
                                            <div class="text-center pt-3 pb-1">
                                                <h4>Data Kelembagaan Koperasi</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class="mb-4">
                                            <h5><span style="color:red">*</span>Data kelembagaan</h5>
                                        </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota pria
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota Wanita
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota pria
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota Wanita
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Total pegawai
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                <div class="mb-4">
                                            <h5><span style="color:red">*</span>Data kelembagaan</h5>
                                        </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota pria
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota Wanita
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                        <input type="text" class="form-control  rounded-pill form-control-lg"
                                        id="profile-img-file-input" placeholder="Tanggal/ Bulan/ Tahun" data-provider="flatpickr"
                                                data-date-format="d M, Y">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota pria
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                        <select class="form-select form-select-lg rounded-pill mb-3"
                                            aria-label="Default select example" id="profile-img-file-input">
                                            <option selected>Search for services</option>
                                            <option value="1">Information Architecture</option>
                                            <option value="2">UI/UX Design</option>
                                            <option value="3">Back End Development</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3">
                                        <span style="color:red">*</span>Jumlah Anggota Wanita
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill form-control-lg"
                                                id="profile-img-file-input" placeholder="Nomor badan hukum">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button"
                                        class="btn btn-link text-decoration-none btn-label previestab"
                                        data-previous="pills-info-desc-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back
                                        to
                                        General</button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab
nexttab" data-nexttab="pills-success-tab2"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-success2" role="tabpanel"
                                aria-labelledby="pills-success-tab2">
                                <div>
                                    <div class="text-center mt-4">
                                    <h2>Selamat,  Pendaftaran Berhasil Dilakukan!</h2>
                                    <h4 class="text-muted">Silahkan menunggu email verifikasi</h4>

                                        <div class="mb-4">
                                        <img src="assets/images/sukses.png" alt="opening" class="img-fluid img-responsive" height="20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="assets/js/pages/form-wizard.init.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script>
        document.querySelectorAll("[data-provider]").forEach(function (e) {
            var t, a, o;
            "flatpickr" == e.getAttribute("data-provider") ? (o = {}, (t = e.attributes)["data-date-format"] &&
                    (o.dateFormat = t["data-date-format"].value.toString()), t["data-enable-time"] && (o
                        .enableTime = !0, o.dateFormat = t["data-date-format"].value.toString() + " H:i"), t[
                        "data-altFormat"] && (o.altInput = !0, o.altFormat = t["data-altFormat"].value
                        .toString()), t["data-minDate"] && (o.minDate = t["data-minDate"].value.toString(), o
                        .dateFormat = t["data-date-format"].value.toString()), t["data-maxDate"] && (o.maxDate =
                        t["data-maxDate"].value.toString(), o.dateFormat = t["data-date-format"].value
                        .toString()), t["data-deafult-date"] && (o.defaultDate = t["data-deafult-date"].value
                        .toString(), o.dateFormat = t["data-date-format"].value.toString()), t[
                        "data-multiple-date"] && (o.mode = "multiple", o.dateFormat = t["data-date-format"]
                        .value.toString()), t["data-range-date"] && (o.mode = "range", o.dateFormat = t[
                        "data-date-format"].value.toString()), t["data-inline-date"] && (o.inline = !0, o
                        .defaultDate = t["data-deafult-date"].value.toString(), o.dateFormat = t[
                            "data-date-format"].value.toString()), t["data-disable-date"] && ((a = []).push(t[
                        "data-disable-date"].value), o.disable = a.toString().split(",")), flatpickr(e, o)) :
                "timepickr" == e.getAttribute("data-provider") && (a = {}, (o = e.attributes)[
                    "data-time-basic"] && (a.enableTime = !0, a.noCalendar = !0, a.dateFormat = "H:i"), o[
                    "data-time-hrs"] && (a.enableTime = !0, a.noCalendar = !0, a.dateFormat = "H:i", a
                    .time_24hr = !0), o["data-min-time"] && (a.enableTime = !0, a.noCalendar = !0, a
                    .dateFormat = "H:i", a.minTime = o["data-min-time"].value.toString()), o[
                    "data-max-time"] && (a.enableTime = !0, a.noCalendar = !0, a.dateFormat = "H:i", a
                    .minTime = o["data-max-time"].value.toString()), o["data-default-time"] && (a
                    .enableTime = !0, a.noCalendar = !0, a.dateFormat = "H:i", a.defaultDate = o[
                        "data-default-time"].value.toString()), o["data-time-inline"] && (a.enableTime = !0,
                    a.noCalendar = !0, a.defaultDate = o["data-time-inline"].value.toString(), a.inline = !0
                ), flatpickr(e, a))
        })
    </script>

@endsection