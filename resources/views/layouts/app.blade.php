<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Dashboard | Doctorly - Patient Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Hospital Management System" name="description" />
    <meta content="Doctorly" name="author">

    @stack('meta')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-light" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-rtl.min.css') }}" id="app-rtl" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-dark.min.css') }}" id="app-dark" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-light" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">

    @stack('styles')

</head>


<body data-topbar="dark" data-layout="horizontal">

    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-dark1.png') }}" alt=""
                                    height="17">
                            </span>
                        </a>
                        <a href="" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-light1.png') }}" alt=""
                                    height="19">
                            </span>
                        </a>
                    </div>
                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                        data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex">

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge badge-danger badge-pill">7</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="notification-list" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar class="notification-list-scroll overflow-auto" style="max-height: 230px;">
                                <a href="notification-list" class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Leone Trantow</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 18 hours
                                                    ago
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                    href="notification-list">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('storage/images/users/1645508722.jpg') }}" alt="Avatar">
                            <span class="d-none d-xl-inline-block ml-1">AdminApp</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('backend.profile') }}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                            {{-- <a class="dropdown-item" href="payment-key"><i class="bx bx-key font-size-16 align-middle mr-1"></i> Payment Api Key</a> --}}
                            <a class="dropdown-item d-block"
                                href="change-password"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Security</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="javascript:void();"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                                Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect ">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('backend.overview') }}">
                                    <i class="bx bx-home-circle mr-2"></i>Dashboard
                                </a>
                            </li>

                            @role('admin')
                            {{-- Admin Section --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Doctors
                                    <span class="arrow-down"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="{{ route('backend.doctors.index') }}" class="dropdown-item">List of Doctors</a>
                                    <a href="{{ route('backend.doctors.create') }}" class="dropdown-item">Add New Doctor</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Patients <span class="arrow-down"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="{{ route('backend.patients.index') }}" class="dropdown-item">List of Patients</a>
                                    <a href="{{ route('backend.patients.create') }}" class="dropdown-item">Add New Patient</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Receptionist
                                    <span class="arrow-down"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="receptionist" class="dropdown-item">List of Receptionist</a>
                                    <a href="receptionist/create" class="dropdown-item">Add New Receptionist</a>
                                </div>
                            </li>

                            @elserole('doctor')
                            {{-- Doctor Section` --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('backend.appointments.index') }}">
                                        <i class="bx bx-calendar-plus mr-2"></i>Appointment
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-user-circle mr-2"></i>Patients <span class="arrow-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                        <a href="{{ route('backend.patients.index') }}" class="dropdown-item">List of Patients</a>
                                        <a href="{{ route('backend.patients.create') }}" class="dropdown-item">Add New Patient</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="https://doctorly.themesbrand.website/receptionist">
                                    {{-- <a class="nav-link" href="#/receptionist"> --}}
                                        <i class="bx bx-user-circle mr-2"></i>Receptionist
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-notepad mr-2"></i>Prescription<div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                        <a href="#" class="dropdown-item">List of Prescriptions</a>
                                        <a href="#" class="dropdown-item">Create Prescription</a>
                                    </div>
                                </li>

                            @else
                            {{-- Patient Section --}}

                            @endrole


                            <li class="nav-item">
                                <a class="nav-link"
                                    href="pending-appointment">
                                    <i class='bx bx-list-plus mr-2'></i>Appointment List
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="transaction">
                                    <i class='bx bx-list-check mr-2'></i>Transaction
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    {{ $slot }}
                </div> <!-- content -->
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2022 © Telemedicine
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design &amp; Develop by Joemires
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <!-- Right Sidebar -->
    <div class="right-bar">
        {{-- <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>
            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center">Choose Layouts</h6>
            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>
                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>
                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
                <a href="javascript::void(0);" class="btn btn-primary btn-block mt-3" target="_blank"><i
                        class="mdi mdi-cart mr-1"></i> Purchase Now</a>
            </div>
        </div> <!-- end slim-scroll-menu--> --}}
    </div>
    <!-- /Right-bar -->
    <!-- END Right Sidebar -->

    <!-- JAVASCRIPT -->
    {{-- <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/node-waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>

    <!-- Plugin Js-->
    @stack('scripts')

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script>
        // function notifyCount() {
        //     var load_count = $('.badge-pill').html();
        //     var token = $("input[name='_token']").val();
        //     $.ajax({
        //         type: "get",
        //         url: "/notification-count",
        //         data: {
        //             _token: token,
        //         },
        //         success: function(data) {
        //             $('.badge-pill').html(data);
        //             if (load_count < data) {
        //                 notificationShow();
        //             }
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // }
        // setInterval(function() {
        //     notifyCount();
        // }, 10000);

        // function notificationShow() {
        //     var token = $("input[name='_token']").val();
        //     $.ajax({
        //         type: "POST",
        //         url: "/top-notification",
        //         data: {
        //             _token: token,
        //         },
        //         success: function(data) {
        //             $('.notification-list-scroll').html(data.options);
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // }
        // setInterval(function() {
        //     notificationShow();
        // }, 5000);
    </script>
</body>

</html>
