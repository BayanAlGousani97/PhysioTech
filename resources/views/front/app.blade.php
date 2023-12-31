<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>{{ trans('views.site.title') }}</title>
    <meta name="description" content="{{ trans('views.site.meta.description') }}">
    <meta name="keywords" content="{{ trans('views.site.meta.keywords') }}">
    <meta name="author" content="{{ trans('views.site.meta.author') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link href="{{ asset('fonts/googleapis.css') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-main" role="status"></div>
    </div>
    <!-- Spinner End -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white px-2 py-2">
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
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('front.index') }}">{{ trans('views.site.nav.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}#about"
                            class="nav-link">{{ trans('views.site.nav.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}#services"
                            class="nav-link ">{{ trans('views.site.nav.services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}#doctors"
                            class=" nav-link">{{ trans('views.site.nav.doctors') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}#contact"
                            class=" nav-link">{{ trans('views.site.nav.contact') }}</a>
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
                    <a class="btn btn-primary"
                        href="{{ route('bookAppointment') }}">{{ trans('views.site.nav.bookAppointment') }}</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        @include('flash-messages')
    </div>

    @yield('content')


    @if ($info->map)
        <!-- Google Map Start -->
        <div class="container-xxl px-0 wow fadeInUp" data-wow-delay="0.1s">
            <iframe class="w-100 mb-n2" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.405907100042!2d46.66055189999999!3d24.7472683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36e387f674d%3A0x78f2581aeb8b24fb!2z2YXYrNmF2Lkg2LfYqCDYp9mE2KPYudi12KfYqCDYp9mE2KrYrti12LXZiiDYry7Yudio2K_Yp9mE2LHYrdmF2YYg2KfZhNi32K3Yp9mGIE5ldXJvY2xpbmlj!5e0!3m2!1sar!2sus!4v1687341577628!5m2!1sar!2sus"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- Google Map End -->
    @endif


    <!-- Footer Start -->
    <div class="container-fluid bg-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-second mb-4"><img class="img-fluid me-2" src="{{ asset('/img/logo.png') }}"
                            alt="{{ trans('views.site.title') }}" style="width: 45px;">{{ trans('views.site.title') }}
                    </h1>
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
                    <p><i class="fa fa-map-marker-alt me-3 ms-1"></i>
                        <a class="text-muted" href="{{ $info->map }}" target="_blank">{{ $info->address }}</a>
                    </p>
                    <p><i class="fa fa-phone-alt me-3 ms-1"></i>
                        <a class="text-muted" href="tel:{{ $info->phone1 }}">{{ $info->phone1 }}</a>
                    </p>
                    <p><i class="fa fa-phone-alt me-3 ms-1"></i>
                        <a class="text-muted" href="tel:{{ $info->phone2 }}">{{ $info->phone2 }}</a>
                    </p>
                    <p><i class="fa fa-phone-alt me-3 ms-1"></i>
                        <a class="text-muted" href="tel:{{ $info->tel }}">{{ $info->tel }}</a>
                    </p>
                    <p><i class="fa fa-envelope me-3 ms-2"></i><a class="text-muted"
                            href="mailto:{{ $info->email }}" target="_blank">{{ $info->email }}</a></p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.nav.services') }}</h5>
                    @foreach ($services as $item)
                        <p> <a class="btn btn-link" href="{{ route('front.service', $item->id) }}" target="_blank">
                                <span class="p-1">{{ $item->name }}</span>
                            </a></p>
                    @endforeach

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.foorer.quickLinks') }}</h5>
                    <p><a class="btn btn-link" href="{{ route('front.index') }}#about">
                            <span class="p-1"> {{ trans('views.site.nav.about') }}</span>
                        </a></p>
                    <p><a class="btn btn-link" href="{{ route('front.index') }}#services">
                            <span class="p-1">{{ trans('views.site.nav.services') }}
                            </span></a>
                    </p>
                    <p><a class="btn btn-link" href="{{ route('front.index') }}#doctors">
                            <span class="p-1">{{ trans('views.site.nav.doctors') }}
                            </span></a>
                    </p>
                    <p><a class="btn btn-link" href="{{ route('front.index') }}#contant">
                            <span class="p-1">{{ trans('views.site.nav.contact') }}
                            </span></a>
                    </p>

                    {{-- <p><a class="btn btn-link" href="#">
                            <span class="p-1">{{ trans('views.site.pages.termsCondition') }}
                            </span></a>
                    </p> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ trans('views.site.footer.followUs') }}</h5>
                    <div class="d-flex">
                        @isset($info->instagram)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->instagram }}"
                                target="_blank"><i class="fab fa-instagram"></i></a>
                        @endisset
                        @isset($info->facebook)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->facebook }}"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                        @endisset

                        @isset($info->youtube)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->youtube }}" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        @endisset
                        {{-- @isset($info->linkedin)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->linkedin }}"
                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        @endisset --}}

                        @isset($info->whatsapp)
                            <a class="btn btn-square rounded-circle me-1" href="https://wa.me/{{ $info->whatsapp }}"
                                target="_blank"><i class="fab fa-whatsapp"></i></a>
                        @endisset
                        @isset($info->snapchat)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->snapchat }}"
                                target="_blank"><i class="fab fa-snapchat"></i></a>
                        @endisset
                        @isset($info->telegram)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->telegram }}"
                                target="_blank"><i class="fab fa-telegram"></i></a>
                        @endisset
                        @isset($info->twitter)
                            <a class="btn btn-square rounded-circle me-1" href="{{ $info->twitter }}" target="_blank"><i
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
                        &copy; <a href="{{ route('front.index') }}">{{ trans('views.site.title') }}</a>,
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
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Script to add active class to nav item when click on it -->
    <script>
        const navItems = document.querySelectorAll('.nav-link');

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all items
                navItems.forEach(item => {
                    item.classList.remove('active');
                });

                // Add active class to clicked item
                item.classList.add('active');
            });
        });
    </script>

</body>

</html>
