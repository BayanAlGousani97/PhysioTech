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
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/service1.jpg" class="d-block w-100" style="height: 450px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/service2.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/service3.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
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
                <h1 class="display-6 text-title">About Us</h1>
                <p class="text-main fs-5 mb-4">The Most Trusted Physiotherapy Platform</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <img class="img-fluid" src="img/aboutus-removebg-preview.png" alt="">

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p>This text is an experimental text and can be replaced with other content describing the business,
                            This text is an experimental text and can be replaced with other content describing the
                            business, This text is an experimental text and can be replaced with other content describing
                            the business</p>
                        <p class="mb-4">This text is an experimental text and can be replaced with other content
                            describing the business, This text is an experimental text and can be replaced with other
                            content describing the business</p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>This text is an experimental text</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>This text is an experimental text</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-main btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>This text is an experimental text</span>
                        </div>
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
                <h1 class="display-6 text-title">Services</h1>
                <p class="text-main fs-5 mb-5">We receive many cases that need physical therapy and home care.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">neurological injuries</h5>
                        <p>such as paralysis resulting from strokes, brain injuries, and cord injuries
                            Spinal sclerosis, Parkinson's syndrome, peripheral nerve infections, and facial paralysis.</p>
                        <a href="" class="text-main">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h5 class="mb-3">Musculoskeletal injuries</h5>
                        <p>such as joint stiffness, rheumatism, and rehabilitation after fractures
                            And accidents, rehabilitation after knee and pelvic joint replacement, spine slips and surgery,
                            infections
                            and diseases of the shoulder joint.</p>
                        <a href="" class="text-main">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3">Heart and chest diseases</h5>
                        <p>Physiotherapy helps patients with heart and chest diseases
                            Respiratory infections, cardiovascular diseases, and improves the performance of the heart and
                            lungs
                            Physiotherapy in rehabilitating patients before and after heart and chest operations to return
                            to normal life.
                        </p>
                        <a href="" class="text-main">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3">Sports injuries</h5>
                        <p>Cruciate ligament, tendons and cartilage of the knee joint, ankle sprain, tennis and golf elbow,
                            patellar disease (knee cap), plantar fasciitis, muscle tears, Achilles tendon rehabilitation
                            (foot tendon)</p>
                        <a href="" class="text-main">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3">Home Care</h5>
                        <p> You can't come to the clinic. We have a treatment team that visits you at home and gives you an
                            evaluation of your condition to begin with.
                            With you, the treatment journey so that you can return to your normal life as it was before the
                            injury.</p>
                        <a href="" class="text-main">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Mission Start -->
    <div class="container-xxl my-4 py-4">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/icon-9.png" alt="">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">Our Mission</h1>
                        <p class="text-main fs-5 mb-4">The Most Trusted Physiotherapy Platform</p>
                        <p>This text is an experimental text and can be replaced with other content describing the business,
                            This text is an experimental text and can be replaced with other content describing the
                            business, This text is an experimental text and can be replaced with other content describing
                            the business</p>

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
                    <img class="img-fluid" src="img/icon-9.png" alt="">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">Our Vision</h1>
                        <p class="text-main fs-5 mb-4">The Most Trusted Physiotherapy Platform</p>
                        <p>This text is an experimental text and can be replaced with other content describing the business,
                            This text is an experimental text and can be replaced with other content describing the
                            business, This text is an experimental text and can be replaced with other content describing
                            the business</p>

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
                    <img class="img-fluid" src="img/icon-9.png" alt="">
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 text-title">Our Goul</h1>
                        <p class="text-main fs-5 mb-4">The Most Trusted Physiotherapy Platform</p>
                        <p>This text is an experimental text and can be replaced with other content describing the business,
                            This text is an experimental text and can be replaced with other content describing the
                            business, This text is an experimental text and can be replaced with other content describing
                            the business</p>

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

    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px;" src="{{ $info->map }}" frameborder="0" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->
@endsection()
