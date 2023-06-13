<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>Physio Tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/hero-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-main" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    {{-- <div class="container-fluid bg-white sticky-top px-lg-5 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6 text-md-start">
                <h4 class="text-main">Physio Tech</h4>
                <span class="small">Physiotherapy | Home care</span>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="index.html" class="text-dark">
                    عربي
                    <i class="fa fal fa-language"></i>
                </a>
            </div>
        </div>
    </div> --}}
    <!-- Navbar End -->

    <!-- Header Start -->
    {{-- <nav class="navbar navbar-expand-lg bg-light navbar-light px-3 px-lg-5">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link ">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#doctors" class=" nav-link">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class=" nav-link">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text py-1">
                    <a href="" class="btn btn-sm btn-primary small">Book Appointment</a>
                </span>
            </div>
        </div>

    </nav> --}}
    <!-- Header End -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white px-2 py-2 ">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('front.index') }}">
                <h3 class="text-main">{{ trans('views.site.title') }}</h3>
                <p class="text-muted small ">{{ $infoT['slogan'][str_replace('_', '-', app()->getLocale())] }}</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ml-auto @if (app()->isLocale('en')) me-auto @endif my-2 my-lg-0 navbar-nav-scroll"
                    style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="#">{{ trans('views.site.nav.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">{{ trans('views.site.nav.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link ">{{ trans('views.site.nav.services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#doctors" class=" nav-link">{{ trans('views.site.nav.doctors') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class=" nav-link">{{ trans('views.site.nav.contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="@if (app()->isLocale('en')) {{ route('ar') }} @else {{ route('en') }} @endif"
                            class="nav-link">
                            @if (app()->isLocale('en'))
                                عربي
                            @else
                                English
                            @endif
                        </a>
                    </li>
                </ul>
                <form class="d-flex @if (app()->isLocale('ar')) me-auto @endif">
                    <button class="btn btn-primary"
                        type="submit">{{ trans('views.site.nav.bookAppointment') }}</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-second mb-4"><img class="img-fluid me-2" src="img/hero-1.png" alt=""
                            style="width: 45px;">{{ trans('views.site.title') }}</h1>
                    <span>{{ $infoT['summary'][str_replace('_', '-', app()->getLocale())] }}</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">{{ $businessSection->name }}</h5>
                    <p>{{ $businessSection->title }}
                    </p>
                    <div class="position-relative">
                        @foreach ($businessHours as $item)
                            @if ($item->status == 'open')
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                                    <span> {{ $item->day }} : {{ trans('views.site.from') }}
                                        {{ $item->from->translatedFormat('h:i a') }} {{ trans('views.site.to') }}
                                        {{ $item->to->translatedFormat('h:i a') }}</span>
                                </div>
                            @else
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                                    <span>{{ $item->day }}: {{ trans('views.site.close') }}</span>
                                </div>
                            @endif
                        @endforeach



                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.footer.getInTouch') }}</h5>
                    <p><i class="fa fa-map-marker-alt me-3 ms-1"></i>{{ $info->address }}
                    </p>
                    <p><i class="fa fa-phone-alt me-3 ms-1"></i>{{ $info->phone }}
                    </p>
                    <p><i class="fa fa-envelope me-3 ms-1"></i>{{ $info->email }}</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.nav.services') }}</h5>
                    @foreach ($services as $item)
                        <p> <a class="btn btn-link" href="">
                                <span class="p-1">{{ $item->name }}</span>
                            </a></p>
                    @endforeach

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.foorer.quickLinks') }}</h5>
                    <p><a class="btn btn-link" href="#about">
                            <span class="p-1"> {{ trans('views.site.nav.about') }}</span>
                        </a></p>
                    <p><a class="btn btn-link" href="#contant">
                            <span class="p-1">{{ trans('views.site.nav.contact') }}
                            </span></a>
                    </p>
                    <p><a class="btn btn-link" href="#services">
                            <span class="p-1">{{ trans('views.site.nav.services') }}
                            </span></a>
                    </p>
                    <p><a class="btn btn-link" href="#">
                            <span class="p-1">{{ trans('views.site.pages.termsCondition') }}
                            </span></a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.footer.followUs') }}</h5>
                    <div class="d-flex">
                        @isset($info->instagram)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->instagram }}"><i
                                    class="fab fa-instagram"></i></a>
                        @endisset
                        @isset($info->facebook)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->facebook }}"><i
                                    class="fab fa-facebook-f"></i></a>
                        @endisset

                        @isset($info->youtube)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->youtube }}"><i
                                    class="fab fa-youtube"></i></a>
                        @endisset
                        @isset($info->linkedin)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->linkedin }}"><i
                                    class="fab fa-linkedin-in"></i></a>
                        @endisset

                        @isset($info->whatsapp)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->whatsapp }}"><i
                                    class="fab fa-whatsapp"></i></a>
                        @endisset
                        @isset($info->snapchat)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->snapchat }}"><i
                                    class="fab fa-snapchat"></i></a>
                        @endisset
                        @isset($info->telegram)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->telegram }}"><i
                                    class="fab fa-telegram"></i></a>
                        @endisset
                        @isset($info->twitter)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->twitter }}"><i
                                    class="fab fa-twitter"></i></a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">{{ trans('views.site.title') }}</a>,
                        {{ trans('views.site.footer.allRight') }} | 2023
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
