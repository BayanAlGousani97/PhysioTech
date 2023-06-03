<!DOCTYPE html>
<html lang="en">

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
                <h3 class="text-main">Physio Tech</h3>
                <p class="text-muted small ">Physiotherapy | Home care</p>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">arabic</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-primary" type="submit">Book Appointment</button>
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
                            style="width: 45px;">PhysioTech</h1>
                    <span>This text is an experimental text and can be replaced with other content describing the
                        business,
                        This text is an experimental text and can be replaced with other content describing the
                        business</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">Bussiness hours</h5>
                    <p>This text is an experimental text and can be replaced with other content describing the business
                    </p>
                    <div class="position-relative">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span> Sat - Thur : From 09:00 AM To 09:00 PM</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Fri: Closed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">neurological injuries</a>
                    <a class="btn btn-link" href="">Musculoskeletal injuries</a>
                    <a class="btn btn-link" href="">Heart and chest diseases</a>
                    <a class="btn btn-link" href="">Sports injuries</a>
                    <a class="btn btn-link" href="">Home Care</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#contant">Contact Us</a>
                    <a class="btn btn-link" href="#services">Our Services</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Follow Us</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">PhysioTech</a>, All Right Reserved | 2023
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
