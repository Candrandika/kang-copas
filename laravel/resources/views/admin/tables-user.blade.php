<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:31:19 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Data Tables | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
            type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                <input type="text" class="form-control" placeholder="Cari ..."
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


            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Cari...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>

            <!-- Notification Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell"></i>
                    <span class="badge bg-info rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <h5 class="p-3 text-dark mb-0">Notifikasi (37)</h5>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-flag"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your Order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="p-2 d-grid">
                        <a class="font-size-14 text-center" href="javascript:void(0)">View all</a>
                    </div>
                </div>
            </div>

            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-wallet font-size-16 align-middle text-muted me-2"></i>
                        <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                            class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                        <span>Settings</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lock-open-outline font-size-16 text-muted align-middle me-2"></i>
                        <span>Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="#"><i
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Logout</span></a>
                </div>
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
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                                    <span>Dashboard</span>

                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Pesan Masuk</a></li>
                                    <li><a href="email-read.html">Pesan Dibaca</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="tables-user.html" class="waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Data pengguna</span>
                                </a>
                            </li>

                            <li>
                                <a href="tables-link.html" class="waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Data Tautan</span>
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
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18">Data Pengguna</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">LinkU</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Pengguna</li>
                                        </ol>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start Page-content-Wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="card-title">Data Pengguna</h4>
                                            <p class="card-title-desc">DataTables has most features enabled by default, so all
                                                you need to do to use it with your own tables is to call the construction
                                                function: <code>$().DataTable();</code>.
                                            </p>

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Nama pengguna</th>
                                                        <th>Foto</th>
                                                        <th>Email</th>
                                                        <th>Bio</th>
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                        <tr>
                                                            <td style="width: 80px">1</td>
                                                            <td>mc.henry</td>
                                                            <td><img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>mc.david121@gmail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>kirk.frank</td>
                                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>kirk.fnk@kirk.ru</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>rafaelmo12</td>
                                                            <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>rafaelmor@yahoo.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>mark.ellie</td>
                                                            <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>ellima.rk@elli.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>minniewalt</td>
                                                            <td><img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>minniiwalt23@mymail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Brielle Williamson</td>
                                                        <td><img src="assets/images/users/avatar-8.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>brielle.will@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Herrod Chandler</td>
                                                        <td>
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">
                                                        </td>
                                                        <td>herchand@maymail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Rhona Davidson</td>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>rhondavidson@yahoo.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Colleen Hurst</td>
                                                        <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>collen.hurts@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Sonya Frost</td>
                                                        <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>sonyafrost@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>  
                                                    <tr>
                                                            <td>11</td>
                                                            <td>mc.henry</td>
                                                            <td><img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>mc.david121@gmail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>kirk.frank</td>
                                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>kirk.fnk@kirk.ru</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>rafaelmo12</td>
                                                            <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>rafaelmor@yahoo.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>mark.ellie</td>
                                                            <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>ellima.rk@elli.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>minniewalt</td>
                                                            <td><img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>minniiwalt23@mymail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Brielle Williamson</td>
                                                        <td><img src="assets/images/users/avatar-8.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>brielle.will@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Herrod Chandler</td>
                                                        <td>
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">
                                                        </td>
                                                        <td>herchand@maymail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Rhona Davidson</td>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>rhondavidson@yahoo.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Colleen Hurst</td>
                                                        <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>collen.hurts@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Sonya Frost</td>
                                                        <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>sonyafrost@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                            <td>21</td>
                                                            <td>mc.henry</td>
                                                            <td><img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>mc.david121@gmail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td>kirk.frank</td>
                                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>kirk.fnk@kirk.ru</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td>rafaelmo12</td>
                                                            <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>rafaelmor@yahoo.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>mark.ellie</td>
                                                            <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>ellima.rk@elli.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>minniewalt</td>
                                                            <td><img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                            <td>minniiwalt23@mymail.com</td>
                                                            <td>bio</td>
                                                            
                                                        </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>Brielle Williamson</td>
                                                        <td><img src="assets/images/users/avatar-8.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>brielle.will@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>Herrod Chandler</td>
                                                        <td>
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">
                                                        </td>
                                                        <td>herchand@maymail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>Rhona Davidson</td>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>rhondavidson@yahoo.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>Colleen Hurst</td>
                                                        <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>collen.hurts@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>Sonya Frost</td>
                                                        <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"></td>
                                                        <td>sonyafrost@gmail.com</td>
                                                        <td>bio</td>
                                                        
                                                    </tr> 
                                                    
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- Container-Fluid -->
                </div>
                <!-- End Page-content-wrapper -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    Themesbrand.</span>
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
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
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

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:31:30 GMT -->
</html>