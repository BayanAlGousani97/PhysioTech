@extends('front.app')

@section('content')
    <!-- Banners -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $item)
                <div class="carousel-item @if ($item->id == 1) active @endif" data-bs-interval="5000">
                    <img src="@if (app()->isLocale('ar')) {{ $item->image_ar }}@else{{ $item->image_en }} @endif"
                        class="d-block w-100" style="height: 450px;" alt="{{ $item->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Banners -->

    <!-- About Start -->
    <div class="container-xxl my-5 py-5" id="about">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-title">{{ $aboutUs->name }}</h1>
                <p class="text-main fs-5 mb-4">{{ $aboutUs->title }}</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <img class="img-fluid"
                        src="@if (app()->isLocale('ar')) {{ $aboutUs->image_ar }}@else{{ $aboutUs->image_en }} @endif"
                        alt="{{ $aboutUs->title }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p> {{ $aboutUs->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl bg-light py-3 my-3" id="services">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-title">{{ $servicesSection->name }}</h1>
                <p class="text-main fs-5 mb-5">{{ $servicesSection->title }}</p>
            </div>
            <div class="row g-4">
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4"
                                src="@if (app()->isLocale('ar')) {{ $item->image_ar }}@else{{ $item->image_en }} @endif"
                                alt="{{ $item->name }}">
                            <h5 class="mb-3">{{ $item->name }}</h5>
                            <p>{{ $item->short_description }}
                            </p>
                            <a href="{{ route('front.service', [$item->id]) }}"
                                class="text-main">{{ trans('views.site.readMore') }} <i
                                    class="fa fa-arrow-right ms-2"></i></a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Mission Start -->
    <div class="container-xxl my-4 py-4">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid"
                        src="@if (app()->isLocale('ar')) {{ $mission->image_ar }}@else{{ $mission->image_en }} @endif"
                        alt="{{ $mission->title }}">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">{{ $mission->name }}</h1>
                        <p class="text-main fs-5 mb-4">{{ $mission->title }}</p>
                        <p>{{ $mission->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission End -->

    <!-- vision Start -->
    <div class="container-xxl bg-light mt-4">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid"
                        src="@if (app()->isLocale('ar')) {{ $vision->image_ar }}@else{{ $vision->image_en }} @endif"
                        alt="{{ $vision->title }}">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">{{ $vision->name }}</h1>
                        <p class="text-main fs-5 mb-4">{{ $vision->title }}</p>
                        <p>{{ $vision->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- vision End -->

    <!-- Goul Start -->
    <div class="container-xxl mt-4">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid"
                        src="@if (app()->isLocale('ar')) {{ $goal->image_ar }}@else{{ $goal->image_en }} @endif"
                        alt="{{ $goal->title }}">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">{{ $goal->name }}</h1>
                        <p class="text-main fs-5 mb-4">{{ $goal->title }}</p>
                        <p>{{ $goal->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Goul End -->

    <!-- Doctors Start -->
    <div class="container-xxl bg-light py-5" dir="ltr" id="doctors">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-title">Doctors</h1>
                <p class="text-main fs-5 mb-5">Diam dolor ipsum sit amet erat ipsum lorem sit</p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Doctor 1</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Doctor 2</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Doctor 3</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Doctor 4</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Doctor 5</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Doctors End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5" id="contact">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-6 text-title">Contact Us</h1>
                    <p class="text-main fs-5 mb-0">If You Have Any Question, Please Contact Us</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-4" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">Our clinic:</p>
                    <h4>Imam Saud bin Abdulaziz Street, Al-Morouj region, Riyadh, Saudi Arabia</h4>
                    <hr class="w-100">
                    <p class="mb-2">Call us:</p>
                    <h4>+012 345 6789</h4>
                    <hr class="w-100">
                    <p class="mb-2">Mail us:</p>
                    <h4>info@example.com</h4>
                    <hr class="w-100">
                    <p class="mb-2">Follow us:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">If You Have Any Question, Please Contact Us, If You Have Any Question, Please Contact
                        Us</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection()
