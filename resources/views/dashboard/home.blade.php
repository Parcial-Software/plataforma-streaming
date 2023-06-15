<x-app-layout>

    <body>
        <!-- Line loader [[ Find at scss/framework/loader.scss ]] -->
        <div id="line_loader"></div>

        <!-- Start:: loader [[ Find at scss/framework/loader.scss ]] -->
        <div id="loader">
            <div class="loader">
                <div class="mx-auto loader__eq">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span class="mt-2 loader__text">Loading</span>
            </div>
        </div>
        <!-- End:: loader -->

        <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="wrapper">

            <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
            <main id="page_content">

                <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="hero" style="background-image: url(images/banner/portada.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Listen top charts</span>
                                <h3 class="mb-0">Top <span class="text-primary">Charts</span></h3>
                            </div>
                            <a href="songs.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="1" data-song-name="I love you mummy" data-song-artist="Arebica Luna" data-song-album="Mummy" data-song-url="audio/ringtone-1.mp3" data-song-cover="images/cover/small/1.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="1">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/1.jpg" alt="I love you mummy">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="1">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">I love you mummy</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Arebica Luna</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="2">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/2.jpg" alt="Shack your butty">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Shack your butty</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="3" data-song-name="Do it your way(Female)" data-song-artist="Zunira Willy & Nutty Nina" data-song-album="Own way" data-song-url="audio/ringtone-3.mp3" data-song-cover="images/cover/small/3.jpg">
                                            <div class="cover__head">
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="3">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="3">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="3">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="3">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="3">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/3.jpg" alt="Do it your way(Female)">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Do it your way(Female)</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Zunira Willy</a>,
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="4">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/4.jpg" alt="Say yes">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Say yes</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="5" data-song-name="Where is your letter" data-song-artist="Jina Moore & Lenisa Gory" data-song-album="Letter" data-song-url="audio/ringtone-5.mp3" data-song-cover="images/cover/small/5.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="5">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="5">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="5">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="5">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="5">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/5.jpg" alt="Where is your letter">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Where is your letter</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Jina Moore</a>,
                                                    <a href="artist-details.html">Lenisa Gory</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="6">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/6.jpg" alt="Hey not me">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Hey not me</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                </div>
                            </div>
                            <!-- End:: swiper -->

                            <!-- Swiper controls -->
                            <div class="swiper-button-prev btn-default rounded-pill"></div>
                            <div class="swiper-button-next btn-default rounded-pill"></div>
                        </div>
                        <!-- End:: swiper carousel -->

                    </div>
                    <!-- End:: section -->

                    <div class="row">

                        <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                        <div class="section col-xl-6">
                            <div class="section__head">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">Upcoming <span class="text-primary">Events</span></h3>
                                </div>
                                <a href="events.html" class="btn btn-link">Explore More</a>
                            </div>

                            <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper-carousel">
                                <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                                <div class="swiper" data-swiper-slides="2" data-swiper-autoplay="true">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                            <div class="cover cover--round">
                                                <a href="event-details.html" class="cover__image">
                                                    <img src="images/background/horizontal/2.jpg" alt="Event cover">
                                                </a>
                                                <div class="px-2 mt-3 cover__foot">
                                                    <p class="mb-2 cover__subtitle d-flex">
                                                        <i class="ri-map-pin-fill fs-6"></i>
                                                        <span class="ms-1 fw-semi-bold">258 Goff Avenue, MI - USA</span>
                                                    </p>
                                                    <a href="event-details.html" class="mb-3 cover__title fs-6">New year 1st night with BendiQ Band</a>
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
                                                        <a href="event-details.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End:: cover -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                            <div class="cover cover--round">
                                                <a href="event-details.html" class="cover__image">
                                                    <img src="images/background/horizontal/3.jpg" alt="Event cover">
                                                </a>
                                                <div class="px-2 mt-3 cover__foot">
                                                    <p class="mb-2 cover__subtitle d-flex">
                                                        <i class="ri-map-pin-fill fs-6"></i>
                                                        <span class="ms-1 fw-semi-bold">2105 Badger Pond Lane, FL - USA</span>
                                                    </p>
                                                    <a href="event-details.html" class="mb-3 cover__title fs-6">Varida Meronny music band</a>
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
                                                        <a href="event-details.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End:: cover -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                            <div class="cover cover--round">
                                                <a href="event-details.html" class="cover__image">
                                                    <img src="images/background/horizontal/1.jpg" alt="Event cover">
                                                </a>
                                                <div class="px-2 mt-3 cover__foot">
                                                    <p class="mb-2 cover__subtitle d-flex">
                                                        <i class="ri-map-pin-fill fs-6"></i>
                                                        <span class="ms-1 fw-semi-bold">2801 Pine Lake Rd, TX - USA</span>
                                                    </p>
                                                    <a href="event-details.html" class="mb-3 cover__title fs-6">Music night virtual event to welcome new year</a>
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
                                                        <a href="event-details.html" class="btn btn-sm btn-light-primary">Join Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End:: cover -->
                                        </div>
                                    </div>
                                    <!-- Swiper pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Start:: swiper -->
                            </div>
                            <!-- Start:: swiper carousel -->
                        </div>
                        <!-- End:: section -->

                        <div class="col-xl-1"></div>

                        <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                        <div class="section col-xl-5">
                            <!-- Start:: mat tabs [[ Find at scss/components/nav.scss ]] -->
                            <div class="mat-tabs">
                                <ul class="nav nav-tabs" id="songs_list" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="recent" data-bs-toggle="tab" data-bs-target="#recent_pane" type="button" role="tab" aria-controls="recent_pane" aria-selected="true">Recent</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="trending" data-bs-toggle="tab" data-bs-target="#trending_pane" type="button" role="tab" aria-controls="trending_pane" aria-selected="false">Trending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="international" data-bs-toggle="tab" data-bs-target="#international_pane" type="button" role="tab" aria-controls="international_pane" aria-selected="false">International</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- End:: mat tabs -->
                            <div class="mt-4 tab-content" id="songs_list_content">
                                <div class="tab-pane fade show active" id="recent_pane" role="tabpanel" aria-labelledby="recent" tabindex="0">
                                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                                    <div class="list">
                                        <div class="list__item" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/2.jpg" alt="Shack your butty">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Shack your butty</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="2">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:24</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/4.jpg" alt="Say yes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="4" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Say yes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="4">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>04:20</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/6.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="6" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="6">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>01:12</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="8" data-song-name="Sadness inside" data-song-artist="Karen Jennings" data-song-album="Sadness" data-song-url="audio/ringtone-8.mp3" data-song-cover="images/cover/small/8.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/8.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="8" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Sadness inside</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Karen Jennings</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="8">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>02:37</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="8">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="8">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="8">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="8">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="10" data-song-name="Nothing like your eyes" data-song-artist="Nutty Nina" data-song-album="Lover soul" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/10.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/10.jpg" alt="Nothing like your eyes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="10" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Nothing like your eyes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="10">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:54</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="10">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="10">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="10">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="10">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End:: list -->
                                </div>
                                <div class="tab-pane fade" id="trending_pane" role="tabpanel" aria-labelledby="trending" tabindex="0">
                                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                                    <div class="list">
                                        <div class="list__item" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/2.jpg" alt="Shack your butty">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Shack your butty</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="2">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:24</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/4.jpg" alt="Say yes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="4" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Say yes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="4">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>04:20</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/6.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="6" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="6">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>01:12</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="8" data-song-name="Sadness inside" data-song-artist="Karen Jennings" data-song-album="Sadness" data-song-url="audio/ringtone-8.mp3" data-song-cover="images/cover/small/8.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/8.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="8" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Sadness inside</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Karen Jennings</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="8">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>02:37</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="8">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="8">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="8">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="8">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="10" data-song-name="Nothing like your eyes" data-song-artist="Nutty Nina" data-song-album="Lover soul" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/10.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/10.jpg" alt="Nothing like your eyes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="10" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Nothing like your eyes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="10">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:54</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="10">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="10">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="10">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="10">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End:: list -->
                                </div>
                                <div class="tab-pane fade" id="international_pane" role="tabpanel" aria-labelledby="international" tabindex="0">
                                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                                    <div class="list">
                                        <div class="list__item" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/2.jpg" alt="Shack your butty">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Shack your butty</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="2">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:24</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/4.jpg" alt="Say yes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="4" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Say yes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="4">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>04:20</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/6.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="6" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="6">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>01:12</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="8" data-song-name="Sadness inside" data-song-artist="Karen Jennings" data-song-album="Sadness" data-song-url="audio/ringtone-8.mp3" data-song-cover="images/cover/small/8.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/8.jpg" alt="Hey not me">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="8" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Sadness inside</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Karen Jennings</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="8">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>02:37</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="8">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="8">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="8">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="8">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list__item" data-song-id="10" data-song-name="Nothing like your eyes" data-song-artist="Nutty Nina" data-song-album="Lover soul" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/10.jpg">
                                            <div class="list__cover">
                                                <img src="images/cover/small/10.jpg" alt="Nothing like your eyes">
                                                <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="10" aria-label="Play pause">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </a>
                                            </div>
                                            <div class="list__content">
                                                <a href="song-details.html" class="list__title text-truncate">Nothing like your eyes</a>
                                                <p class="list__subtitle text-truncate">
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                            <ul class="list__option">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="10">
                                                        <i class="ri-heart-line heart-empty"></i>
                                                        <i class="ri-heart-fill heart-fill"></i>
                                                    </a>
                                                </li>
                                                <li>03:54</li>
                                                <li class="dropstart d-inline-flex">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="10">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="10">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="10">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="10">Play</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End:: list -->
                                </div>
                            </div>
                        </div>
                        <!-- End:: section -->
                    </div>

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">New to listen</span>
                                <h3 class="mb-0">New <span class="text-primary">Releases</span></h3>
                            </div>
                            <a href="songs.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="1" data-song-name="I love you mummy" data-song-artist="Arebica Luna" data-song-album="Mummy" data-song-url="audio/ringtone-1.mp3" data-song-cover="images/cover/small/1.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="1">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/1.jpg" alt="I love you mummy">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="1">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">I love you mummy</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Arebica Luna</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="2">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/2.jpg" alt="Shack your butty">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Shack your butty</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="3" data-song-name="Do it your way(Female)" data-song-artist="Zunira Willy & Nutty Nina" data-song-album="Own way" data-song-url="audio/ringtone-3.mp3" data-song-cover="images/cover/small/3.jpg">
                                            <div class="cover__head">
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="3">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="3">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="3">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="3">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="3">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/3.jpg" alt="Do it your way(Female)">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Do it your way(Female)</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Zunira Willy</a>,
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="4">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/4.jpg" alt="Say yes">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Say yes</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="5" data-song-name="Where is your letter" data-song-artist="Jina Moore & Lenisa Gory" data-song-album="Letter" data-song-url="audio/ringtone-5.mp3" data-song-cover="images/cover/small/5.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="5">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="5">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="5">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="5">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="5">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/5.jpg" alt="Where is your letter">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Where is your letter</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Jina Moore</a>,
                                                    <a href="artist-details.html">Lenisa Gory</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="6">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/6.jpg" alt="Hey not me">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">Hey not me</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                </div>
                            </div>
                            <!-- End:: swiper -->

                            <!-- Swiper controls -->
                            <div class="swiper-button-prev btn-default rounded-pill"></div>
                            <div class="swiper-button-next btn-default rounded-pill"></div>
                        </div>
                        <!-- End:: swiper carousel -->

                    </div>
                    <!-- End:: section -->

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Best to listen</span>
                                <h3 class="mb-0">Featured <span class="text-primary">Artists</span></h3>
                            </div>
                            <a href="artists.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="6" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/1.jpg" alt="Arebica Luna">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Arebica Luna</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/2.jpg" alt="Gerrina Linda">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Gerrina Linda</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/3.jpg" alt="Zunira Willy">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Zunira Willy</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/4.jpg" alt="Johnny Marro">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Johnny Marro</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/5.jpg" alt="Jina Moore">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Jina Moore</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/6.jpg" alt="Rasomi Pelina">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Rasomi Pelina</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/7.jpg" alt="Pimila Holliwy">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Pimila Holliwy</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/8.jpg" alt="Karen Jennings">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Karen Jennings</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/9.jpg" alt="Lenisa Gory">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Lenisa Gory</a>
                                        </div>
                                        <!-- End:: avatar -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                        <div class="text-center avatar avatar--xxl d-block">
                                            <div class="avatar__image">
                                                <a href="artist-details.html">
                                                    <img src="images/cover/large/10.jpg" alt="Nutty Nina">
                                                </a>
                                            </div>
                                            <a href="artist-details.html" class="mt-3 avatar__title">Nutty Nina</a>
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
                    <!-- End:: section -->

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Trending to listen</span>
                                <h3 class="mb-0">Top <span class="text-primary">Albums</span></h3>
                            </div>
                            <a href="albums.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                        <div class="list list--lg list--order">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/1.jpg" alt="Mummy">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Mummy</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Arebica Luna</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="100">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="100">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/2.jpg" alt="Hot shot">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Hot shot</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Gerrina Linda</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="101">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="101">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-2.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/3.jpg" alt="Own way">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Own way</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Zunira Willy & Nutty Nina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="102">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="102">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-3.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/4.jpg" alt="Say yes">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Say yes</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Johnny Marro</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="103">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="103">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-4.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/5.jpg" alt="Letter">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Letter</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Jina Moore & Lenisa Gory</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="104">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="104">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-5.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/6.jpg" alt="Find soul">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Find soul</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Rasomi Pelina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="105">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="105">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-6.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/7.jpg" alt="Deep inside">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Deep inside</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Pimila Holliwy</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="106">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="106">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-7.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/8.jpg" alt="Sadness">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Sadness</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Karen Jennings</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="107">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="107">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-8.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/9.jpg" alt="Electric wave">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Electric wave</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Lenisa Gory</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="108">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="108">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/10.jpg" alt="Lover soul">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Lover soul</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Nutty Nina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="109">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="109">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-2.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: list -->
                    </div>
                    <!-- End:: section -->

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Collection to listen</span>
                                <h3 class="mb-0">Best <span class="text-primary">Playlist</span></h3>
                            </div>
                            <a href="albums.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="4" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/1.jpg" alt="DJ Remix">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">DJ Remix</a>
                                                    <span class="cover__subtitle">10 Songs | 10 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/2.jpg" alt="Rock Band">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">Rock Band</a>
                                                    <span class="cover__subtitle">14 Songs | 12 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/3.jpg" alt="Solo Special">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">Solo Special</a>
                                                    <span class="cover__subtitle">21 Songs | 45 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/4.jpg" alt="Romantic">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">Romantic</a>
                                                    <span class="cover__subtitle">12 Songs | 75 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/5.jpg" alt="GYM">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">GYM</a>
                                                    <span class="cover__subtitle">16 Songs | 32 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__image">
                                                <a href="album-details.html">
                                                    <img src="images/background/horizontal/6.jpg" alt="Retro Special">
                                                </a>
                                                <div class="cover__image__content">
                                                    <a href="album-details.html" class="mb-1 cover__title fs-6 text-truncate">Retro Special</a>
                                                    <span class="cover__subtitle">34 Songs | 69 Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                </div>
                            </div>
                            <!-- End:: swiper -->

                            <!-- Swiper controls -->
                            <div class="swiper-button-prev btn-default rounded-pill"></div>
                            <div class="swiper-button-next btn-default rounded-pill"></div>
                        </div>
                        <!-- End:: swiper carousel -->
                    </div>
                    <!-- End:: section -->

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Listen live now</span>
                                <h3 class="mb-0">Live <span class="text-primary">Radios</span></h3>
                            </div>
                            <a href="stations.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="1" data-song-name="I love you mummy" data-song-artist="Arebica Luna" data-song-album="Mummy" data-song-url="audio/ringtone-1.mp3" data-song-cover="images/cover/small/1.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="1">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/1.jpg" alt="International">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="1">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">International</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="2" data-song-name="Shack your butty" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="2">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/2.jpg" alt="Network">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">Network</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="3" data-song-name="Do it your way(Female)" data-song-artist="Zunira Willy & Nutty Nina" data-song-album="Own way" data-song-url="audio/ringtone-3.mp3" data-song-cover="images/cover/small/3.jpg">
                                            <div class="cover__head">
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="3">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="3">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="3">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="3">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/3.jpg" alt="Alpha Gamma">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">Alpha Gamma</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="4">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/4.jpg" alt="Leanne Hutton">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">Leanne Hutton</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="5" data-song-name="Where is your letter" data-song-artist="Jina Moore & Lenisa Gory" data-song-album="Letter" data-song-url="audio/ringtone-5.mp3" data-song-cover="images/cover/small/5.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="5">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="5">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="5">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="5">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/5.jpg" alt="K S N F">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">K S N F</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="6">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="images/cover/large/6.jpg" alt="Clay Gandy">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="javascript:void(0);" role="button" class="cover__title text-truncate">Clay Gandy</a>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                </div>
                                <!-- Swiper pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End:: swiper -->
                        </div>
                        <!-- End:: swiper carousel -->

                    </div>
                    <!-- End:: section -->

                </div>
                <!-- End:: under hero -->

            </main>
            <!-- End:: page content -->

        </div>
        <!-- End:: wrapper -->

        <!-- Backdrop [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="backdrop"></div>




    </body>
</x-app-layout>