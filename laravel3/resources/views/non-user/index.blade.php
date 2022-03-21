<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:05 GMT -->
<head>

        <meta charset="utf-8" />
        <title>LinkU</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <!-- MD Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <style>
          html{
            scroll-behavior: smooth;
          }
        </style>

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="24">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


        
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Login Register -->

            <div class="d-inline-block mt-3">
                <a href="login" class="btn btn-outline-light me-2">Masuk</a>
                <a href="register" class="btn btn-light" style="color: #f16c69;">Daftar</a>
            </div>
            

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="#home-section" class="waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>Utama</span>

                                </a>
                            </li>

                            <li>
                                <a href="#features-section" class="waves-effect">
                                    <i class="mdi mdi-equal-box"></i>
                                    <span>Fitur</span>
                                </a>

                            </li>


                            <li>
                                <a href="#about-section" class="waves-effect">
                                    <i class="mdi mdi-information"></i>
                                    <span>Tentang</span>
                                </a>
                            </li>

                            <li>
                                <a href="#contact-section" class="waves-effect">
                                    <i class="mdi mdi-email"></i>
                                    <span>Kontak</span>
                                </a>
                            </li>

                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <!-- Top Banner -->
                    <section id="home-section">
                    <div class="bg-image" style="background-image: url('https://themesbrand.com/agroxa/layouts/red/assets/images/bg.jpg'); height: 100vh;">
                      <div class="container col-xxl-8 px-4 py-5">
                        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                          <div class="col-10 col-sm-8 col-lg-6">
                            <img src="../images/dev2.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                          </div>
                          <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-5 link-light">Cukup Satu Tautan</h1>
                            <p class="lead link-light">Hubungkan semua akun sosial media anda hanya dengan satu tautan saja.</p>
                            <p class="lead link-light">Sudah punya akun? <a href="login" style="text-decoration: none; color:#f16c69;">MASUK</a></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                              <a href="register" class="btn btn-primary btn-lg px-4 me-md-2" style="background-color: #f16c69;">Mulai Sekarang</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </section>
                    <!-- /Top Banner -->

                    <!-- Features -->
                    <section id="features-section">
                    <br>
                    <div class="px-4 pt-5 my-5 text-center">
                      <h1 class="display-5 fw-bold">Semua Tentang Pengalaman</h1>
                      <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">Saatnya untuk mulai melakukan sesuatu yang inovatif. Tahukah apa yang menjadi kebanggaan kami? Yaitu kepuasan Anda! Kerja Cepat Kerja Cermat</p>
                      </div>
                      <div class="overflow-hidden">
                        <div class="container px-5">
                          <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="feature col">

                              <div class="list-group">
                                <div class=" d-flex gap-3 py-3 px-3 my-5 rounded" aria-current="true" style="background-color: #f16c69;">
                                  <i class="bi bi-hand-thumbs-up fs-1 text-light" ></i>
                                  <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                      <h6 class="mb-0 text-light" >Kualitas Premium</h6>
                                      <p class="mb-0 opacity-75 text-light">Dibuat dengan kualitas terbaik yang akan memuaskan.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex gap-3 py-3 px-3 my-5 rounded" aria-current="true" style="background-color: #f16c69;">
                                  <i class="bi bi-people fs-1 text-light"></i>
                                  <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                      <h6 class="mb-0 text-light" >Ramah Pengguna</h6>
                                      <p class="mb-0 opacity-75 text-light">Desain sederhana yang mudah dipahami oleh semua pengguna.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="feature col">
                              <img src="../images/dev3.png" class="img-fluid rounded-3 mb-4" alt="Example image" width="700" height="500" loading="lazy">
                            </div>
                            <div class="feature col">
                              <div class="list-group">
                                <div class=" d-flex gap-3 py-3 px-3 my-5 rounded" aria-current="true" style="background-color: #f16c69;">
                                  <i class="bi bi-palette fs-1 text-light" ></i>
                                  <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                      <h6 class="mb-0 text-light">Desain Unik</h6>
                                      <p class="mb-0 opacity-75 text-light">Desain yang unik, berbeda dengan website lainnya.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex gap-3 py-3 px-3 my-5 rounded" aria-current="true" style="background-color: #f16c69;">
                                  <i class="bi bi-heart fs-1 text-light"></i>
                                  <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                      <h6 class="mb-0 text-light">Dibuat dengan Cinta</h6>
                                      <p class="mb-0 opacity-75 text-light">Dibuat dengan tulus, dibuat dengan hal yang terbaik.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </section>
                    <!-- /Features -->

                      <!-- About -->
                    <section id="about-section">
                    <div class="bg-image" style="background-image: url('../upload/ban.jpg'); height: 100vh;">
                    <div style="height: 200px;"></div>
                    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                      <div class="col-lg-5 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-5 fw-bold lh-1">Kami Menginginkan Apa yang Kalian Inginkan</h1>
                        <p class="lead">Kami adalah website linktree. Kami menyediakan fitur untuk menghubungkan beberapa tautan dari beberapa sosial media ke dalam satu tautan saja.</p>
                      </div>
                    </div>
                    </div>
                    </section>
                    <!-- /About -->

                    <!-- Contact -->
                    <section id="contact-section">
                    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                    <div class="row align-items-center g-lg-5 py-5">
                      <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Pilih Media Anda Untuk Memberi Masukan</h1>
                        <p class="lead col-lg-10 fs-4">Beri masukan dan dukungan untuk kami, supaya kami bisa menjadikan website kami lebih berkembang dan memuaskan karena kepuasan anda adalah kepuasan kami.</p>
                      </div>
                      <div class="col-md-10 mx-auto col-lg-5">
                        <form action="" class="p-4 p-md-5 border rounded-3 bg-light">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput1" Required placeholder="Your Name">
                            <label for="floatingInput1">Nama anda</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput2" Required placeholder="name@example.com">
                            <label for="floatingInput2">Alamat Email</label>
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" aria-label="With textarea" id="floatingInput5" Required placeholder="Pesan"></textarea>
                            <label for="floatingInput5">Pesan</label>
                          </div>
                          <button class="w-100 btn btn-lg btn-primary border-0" type="submit" style="background-color: #f16c69;">Kirim</button>
                        </form>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                      <div class="feature col text-center">
                        <i class="bi bi-telephone fs-1"></i>
                        <h2>Telepon</h2>
                        <p>+62 812-3456-7890</p>
                        <p>+62 899-0000-1111</p>
                      </div>
                      <div class="feature col text-center">
                        <i class="bi bi-envelope fs-1"></i>
                        <h2>Email</h2>
                        <p>kangcopas@linku.com</p>
                        <p>support.kangcopas@linku.com</p>
                      </div>
                      <div class="feature col text-center">
                        <i class="bi bi-geo-alt fs-1"></i>
                        <h2>Lokasi</h2>
                        <p>Ngijo, Karang Ploso, Malang,</p>
                        <p>Jawa Timur, Indonesia</p>
                      </div>
                    </div>




                    
                    </section>
                    <!-- /Contact -->
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © LinkU <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    kang_copas.</span>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Tampilan</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Pilih Tema</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Tema Terang</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Tema Gelap</label>
                    </div>

                    

                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <script src="assets/libs/morris.js/morris.min.js"></script>

        <script src="assets/libs/raphael/raphael.min.js"></script>
        
        <!-- Dashboard init JS -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:33 GMT -->
</html>