<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <link href="{{ asset('assets/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Si MoZiA</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
</head>
<body class="py-5">
        <!-- ======= Sidebar ======= -->
            <!-- BEGIN: Top Bar -->
        <div class="border-b border-white/[0.08] -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
            <div class="top-bar-boxed flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img class="w-6" src="{{ asset('assets/dist/images/logo.png') }}">
                    <span class="text-white text-lg ml-3"> Si MoZiA </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a>Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Posyandu</li>
                    </ol>
                </nav>
                <div class="intro-x relative mr-3 sm:mr-6">
                <button class="btn btn-dark w-24 mr-1 mb-2">Logout</button>
</div>
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="top-menu__title"> Dashboard <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('databalita') }}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="top-menu__title"> Data Balita <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('datapuskesmas') }}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="credit-card"></i> </div>
                        <div class="top-menu__title"> Data Puskesmas <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dataposyandu') }}" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-lucide="layers"></i> </div>
                        <div class="top-menu__title"> Data Posyandu <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dataposyandu') }}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="database"></i> </div>
                        <div class="top-menu__title"> Data Admin <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dataposyandu') }}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="user"></i> </div>
                        <div class="top-menu__title"> Data User <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- END: Top Menu -->
    <div class="body-content h-100">
        <div class="row g-0 h-100">
            <div class="content col-10">
                @yield('container')
            </div>
        </div>
    </div>
</div>




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('assets/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
</body>
</html>