<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Listen App - Online Music Streaming App</title>

    <!-- Favicon -->
    <link href="images/logos/favicon.png" rel="icon" />

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="images/logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="{{ asset('dist/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/styles.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start:: loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="loader">
        <div class="loader">
            <div class="loader__eq mx-auto">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="loader__text mt-2">Loading</span>
        </div>
    </div>
    <!-- End:: loader -->

    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">

        <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
        <header id="main_header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a href="index.html" class="brand external">
                        <img src="images/logos/logo.svg" alt="Listen app">
                    </a>
                    <div class="d-flex align-items-center navbar-ex">
                        <a class="btn btn-primary external" href="register.html">Try it free</a>
                        <button class="navbar-toggler ms-3 ms-sm-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-3-fill"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mt-4 mt-lg-0 mx-auto fw-semi-bold">
                            <li class="nav-item">
                                <a class="nav-link external" href="home.html">Discover</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="about.html">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End:: header -->

        <div class="container-fluid px-xl-4">
            <!-- Start:: main hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="main-hero mx-auto" style="background-image: url(images/background/hero.jpg);">
                <div class="container">
                    <div class="col-xl-6 col-lg-8 col-md-9 fs-5">
                        <h1 class="main-hero__title mb-3">Music to fill your <span class="text-primary">heart.</span></h1>
                        <div class="me-sm-5">
                            <p>Get playlists and albums inspired by the artists and genres you're listing to. 1 month free.</p>
                            <a class="btn btn-lg btn-default external" href="register.html">Try it free</a>
                            <a class="btn btn-lg btn-outline-dark external" href="home.html">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: main hero -->
        </div>

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section">
            <div class="container">
                <div class="col-xl-6 col-lg-8 mx-auto text-center fs-5 mb-5">
                    <h2>Features of <span class="text-primary">Listen App</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus sit aliquid molestiae sint ab illo.</p>
                </div>
                <!-- Start:: feature [[ Find at scss/framework/core.scss ]] -->
                <div class="feature">
                    <div class="row g-4 g-md-5">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-blue);">
                                        <i class="ri-music-2-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Millions of tracks</h5>
                                    <p>Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores Exercitationem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-pink);">
                                        <i class="ri-question-answer-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Comments & reviews</h5>
                                    <p>Accusamus hic dolorem dicta illum quod. Sunt voluptatum assumenda atque praesentium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-purple);">
                                        <i class="ri-calendar-event-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Musical events</h5>
                                    <p>Nesciunt aliquid vitae, asperiores unde soluta quia, commodi ad voluptatum pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-indigo);">
                                        <i class="ri-donut-chart-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Data analytics</h5>
                                    <p>Ratione vel sit corrupti atque natus dolores amet architecto sequi? Tenetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-red);">
                                        <i class="ri-radio-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Live streaming</h5>
                                    <p>Mollitia temporibus fuga est atque harum quod dolorum inventore distinctio!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-orange);">
                                        <i class="ri-vip-crown-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Subscription plan</h5>
                                    <p>Mollitia temporibus fuga est atque harum quod dolorum inventore distinctio!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-green);">
                                        <i class="ri-user-4-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">User management</h5>
                                    <p>Dolorum aut reprehenderit facere quia dolore nesciunt aliquam voluptatem distinctio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: feature -->
            </div>
        </div>
        <!-- End:: main section -->

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section bg-light">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between text-center mb-5">
                    <h2 class="mb-4 mb-sm-0">Upcoming <span class="text-primary">Events</span></h2>
                    <a class="btn btn-outline-primary external" href="login.html">Explore all events</a>
                </div>
                <div class="row g-4 g-md-5">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__image">
                                <img src="images/background/horizontal/2.jpg" alt="Event cover">
                            </div>
                            <div class="cover__foot mt-3 px-2">
                                <p class="cover__subtitle d-flex mb-2">
                                    <i class="ri-map-pin-fill fs-6"></i>
                                    <span class="ms-1 fw-semi-bold">258 Goff Avenue, MI - USA</span>
                                </p>
                                <span class="cover__title fs-6 mb-3">New year 1st night with BendiQ Band</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <!-- Start:: avatar group [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-5.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: avatar group -->
                                        <div class="ps-1">24+</div>
                                    </div>
                                    <a href="login.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                </div>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__image">
                                <img src="images/background/horizontal/3.jpg" alt="Event cover">
                            </div>
                            <div class="cover__foot mt-3 px-2">
                                <p class="cover__subtitle d-flex mb-2">
                                    <i class="ri-map-pin-fill fs-6"></i>
                                    <span class="ms-1 fw-semi-bold">2105 Badger Pond Lane, FL - USA</span>
                                </p>
                                <span class="cover__title fs-6 mb-3">Varida Meronny music band</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <!-- Start:: avatar group [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: avatar group -->
                                        <div class="ps-1">40+</div>
                                    </div>
                                    <a href="login.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                </div>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <div class="cover__image">
                                <img src="images/background/horizontal/1.jpg" alt="Event cover">
                            </div>
                            <div class="cover__foot mt-3 px-2">
                                <p class="cover__subtitle d-flex mb-2">
                                    <i class="ri-map-pin-fill fs-6"></i>
                                    <span class="ms-1 fw-semi-bold">2801 Pine Lake Rd, TX - USA</span>
                                </p>
                                <span class="cover__title fs-6 mb-3">Music night virtual event to welcome new year</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <!-- Start:: avatar group [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar__image">
                                                    <img src="images/users/thumb-3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: avatar group -->
                                        <div class="ps-1">40+</div>
                                    </div>
                                    <a href="login.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                </div>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: main section -->

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div id="pricing" class="main-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2>Flexible <span class="text-primary">Plans</span></h2>
                </div>
                <div class="col-xl-11 col-lg-8 mx-auto pt-4">
                    <!-- Start:: plan [[ Find at scss/framework/plan.scss ]] -->
                    <div class="plan bg-light">
                        <div class="card plan__info overflow-hidden">
                            <div class="card-body d-flex flex-column p-0">
                                <div class="p-4">
                                    <h4 class="mb-3">Free <span class="text-primary">Trial</span></h4>
                                    <p class="fs-6">Get 30 days <b>Free Trial</b> subscription plan to experience awesome music.</p>
                                    <a href="register.html" class="d-inline-flex align-items-center">
                                        <span class="me-1">Register now</span>
                                        <i class="ri-arrow-right-line fs-6"></i>
                                    </a>
                                </div>
                                <div class="px-3 text-center mt-auto">
                                    <img src="images/misc/plan.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="plan__data">
                            <div class="card plan__col">
                                <div class="card-body fw-medium">
                                    <div class="d-flex align-items-center text-dark mb-4">
                                        <i class="ri-music-2-line fs-3"></i>
                                        <h4 class="mb-0 ps-3">Ads <span class="text-primary">free</span></h4>
                                    </div>
                                    <p class="fs-6 opacity-50">What you'll get</p>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">Access all free tracks and app features</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">No Ads between tracks</span>
                                    </div>
                                </div>
                                <div class="card-footer pb-4 pb-sm-0">
                                    <div class="text-dark mb-3"><span class="fs-4 fw-bold">$10.99</span>/year</div>
                                    <button type="button" class="btn btn-primary w-100">Choose</button>
                                </div>
                            </div>
                            <div class="card plan__col">
                                <div class="card-body fw-medium">
                                    <div class="d-flex align-items-center text-dark mb-4">
                                        <i class="ri-vip-crown-line fs-3"></i>
                                        <h4 class="mb-0 ps-3">Premium</h4>
                                    </div>
                                    <p class="fs-6 opacity-50">What you'll get</p>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">Access all free tracks and app features</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">No Ads between tracks</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">Create playlist & access analytics</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">Listen paid track once & purchase</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">Download and listen offline</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-dark mb-3"><span class="fs-4 fw-bold">$99.99</span>/year</div>
                                    <button type="button" class="btn btn-primary w-100">Choose</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: plan -->
                </div>
            </div>
        </div>
        <!-- End:: main section -->

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section bg-light">
            <div class="container">
                <div class="col-xl-6 col-lg-8 mx-auto text-center fs-5 mb-5">
                    <h2>Trending <span class="text-primary">Artists</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus sit aliquid molestiae sint ab illo.</p>
                </div>
                <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                <div class="swiper-carousel swiper-carousel-button">
                    <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper" data-swiper-slides="6" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/1.jpg" alt="Arebica Luna">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Arebica Luna</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/2.jpg" alt="Gerrina Linda">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Gerrina Linda</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/3.jpg" alt="Zunira Willy">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Zunira Willy</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/4.jpg" alt="Johnny Marro">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Johnny Marro</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/5.jpg" alt="Jina Moore">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Jina Moore</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/6.jpg" alt="Rasomi Pelina">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Rasomi Pelina</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/7.jpg" alt="Pimila Holliwy">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Pimila Holliwy</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/8.jpg" alt="Karen Jennings">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Karen Jennings</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/9.jpg" alt="Lenisa Gory">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Lenisa Gory</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                        <a href="artist-details.html">
                                            <img src="images/cover/large/10.jpg" alt="Nutty Nina">
                                        </a>
                                    </div>
                                    <a href="artist-details.html" class="avatar__title mt-3">Nutty Nina</a>
                                </div>
                                <!-- End:: avatar -->
                            </div>
                        </div>
                        <!-- Swiper pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End:: swiper -->
                </div>
                <!-- End:: swiper carousel -->
            </div>
        </div>
        <!-- End:: main section -->

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between text-center mb-5">
                    <h2 class="mb-4 mb-sm-0">Latest <span class="text-primary">Articles</span></h2>
                    <a class="btn btn-outline-primary external" href="blog.html">Explore all blogs</a>
                </div>
                <div class="row g-4 g-md-5">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <a href="blog-details.html" class="cover__image">
                                <img src="images/background/horizontal/4.jpg" alt="Blog cover">
                            </a>
                            <div class="cover__foot mt-3 px-2">
                                <span class="cover__subtitle fw-medium mb-3">Admin - Jun 20, 2022</span>
                                <h5>
                                    <a href="blog-details.html" class="cover__title">Nihil quaerat asperiores repudiandae expedita libero cupiditate.</a>
                                </h5>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <a href="blog-details.html" class="cover__image">
                                <img src="images/background/horizontal/5.jpg" alt="Blog cover">
                            </a>
                            <div class="cover__foot mt-3 px-2">
                                <span class="cover__subtitle fw-medium mb-3">Admin - Jun 20, 2022</span>
                                <h5>
                                    <a href="blog-details.html" class="cover__title">Doloribus repudiandae possimus. Quia dolorum voluptatum dignissimos.</a>
                                </h5>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                        <div class="cover cover--round">
                            <a href="blog-details.html" class="cover__image">
                                <img src="images/background/horizontal/6.jpg" alt="Blog cover">
                            </a>
                            <div class="cover__foot mt-3 px-2">
                                <span class="cover__subtitle fw-medium mb-3">Admin - Jun 20, 2022</span>
                                <h5>
                                    <a href="blog-details.html" class="cover__title">Molestias id porro incidunt aliquid dolor esse obcaecati maiores quas.</a>
                                </h5>
                            </div>
                        </div>
                        <!-- End:: cover -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: main section -->

        <div class="container">
            <!-- Start:: newsletter [[ Find at scss/base/core.scss ]] -->
            <div class="newsletter text-white">
                <div class="col-xl-7 col-lg-10 fs-5 mx-auto text-center">
                    <h2 class="text-white">Join with <span class="newsletter__title-text">Listen App</span></h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias explicabo harum perspiciatis voluptates sed ut.</p>
                    <a href="register.html" class="btn btn-lg btn-default external mt-3">Register now</a>
                </div>
            </div>
            <!-- End:: newsletter -->
        </div>

        <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
        <footer id="main_footer">
            <div class="container">
                <div class="col-xl-6 col-lg-8 col-md-10 mx-auto text-center">
                    <h3 class="mb-5"><span class="text-primary">Millions of songs</span> that you access with your basic information.</h3>
                    <div class="app-btn-group">
                        <a href="#" class="btn btn-lg btn-default">
                            <div class="btn__wrap">
                                <i class="ri-google-play-fill"></i>
                                <span class="ms-2">Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="btn btn-lg btn-default">
                            <div class="btn__wrap">
                                <i class="ri-app-store-fill"></i>
                                <span class="ms-2">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="last-footer py-4">
                    <span>&copy; 2022 Listen app. All rights reserved.</span>
                    <ul class="social">
                        <li>
                            <a href="#">
                                <i class="ri-facebook-fill fs-6"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-twitter-fill fs-6"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-instagram-fill fs-6"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-pinterest-fill fs-6"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-youtube-fill fs-6"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- End:: footer -->

    </div>
    <!-- End:: wrapper -->


    <!-- Scripts -->
    <script src="{{ asset('dist/js/plugins.bundle.js') }}"></script>
    <script src="{{ asset('dist/js/scripts.bundle.js') }}"></script>


</body>

</html>