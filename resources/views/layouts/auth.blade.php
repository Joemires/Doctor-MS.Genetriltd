<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> {{ $attributes->get('page-title') }} | Doctorly - Patient Management System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Hospital Management System" name="description">
    <meta content="Doctorly" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-dark" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-light" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app-rtl.min.css" id="app-rtl" rel="stylesheet" type="text/css">
    <link href="assets/css/app-dark.min.css" id="app-dark" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" id="app-light" rel="stylesheet" type="text/css">
    <link href="assets/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css">

    @stack('styles')
</head>

<body>

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

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        {{ $head_section ?? '' }}
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="https://doctorly.themesbrand.website">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.png"
                                                alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>{{ $foot_section ?? '' }}</p>
                        <p>© 2022 Doctorly. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function login(e) {
            var email = e.closest('.d-flex').querySelector('.email').innerHTML.slice(8);
            var password = e.closest('.d-flex').querySelector('.pass').innerHTML.slice(7);
            document.getElementById('email').value = email;
            document.getElementById('pass').value = password;
        }
    </script>

    <!-- JAVASCRIPT -->
    {{-- <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <script src="assets/libs/metismenu/metismenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/node-waves.min.js"></script>
    <script src="assets/libs/toastr/toastr.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    @stack('scripts')

</body>

</html>
