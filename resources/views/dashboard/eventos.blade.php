<x-app-layout>

<body>

    <!-- Line loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="line_loader"></div>
    
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

        <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(images/banner/event.jpg)"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Upcoming <span class="text-primary">Events</span></h3>
                        </div>
                        <a href="{{ route('dashboard.crear_evento') }}" class="btn btn-primary">
                            <div class="btn__wrap">
                                <i class="ri-add-fill"></i>
                                <span class="d-none d-sm-block">Create Event</span>
                            </div>
                        </a>
                    </div>

                    <div class="row g-4">
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/2.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">258 Goff Avenue, MI - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">New year 1st night with BendiQ Band</a>
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
                                        <a href="{{ route('dashboard.eventos_detalles') }}" class="btn btn-sm btn-light-primary">Join Event</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: cover -->
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/3.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">2105 Badger Pond Lane, FL - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">Varida Meronny music band</a>
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
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/1.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">2801 Pine Lake Rd, TX - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">Music night virtual event to welcome new year</a>
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
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/2.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">258 Goff Avenue, MI - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">New year 1st night with BendiQ Band</a>
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
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/3.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">2105 Badger Pond Lane, FL - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">Varida Meronny music band</a>
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
                        <div class="col-xl-4 col-md-6">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <a href="event-details.html" class="cover__image">
                                    <img src="images/background/horizontal/1.jpg" alt="Event cover">
                                </a>
                                <div class="cover__foot mt-3 px-2">
                                    <p class="cover__subtitle d-flex mb-2">
                                        <i class="ri-map-pin-fill fs-6"></i>
                                        <span class="ms-1 fw-semi-bold">2801 Pine Lake Rd, TX - USA</span>
                                    </p>
                                    <a href="event-details.html" class="cover__title fs-6 mb-3">Music night virtual event to welcome new year</a>
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


    <!-- Scripts -->
    <script src="dist/js/plugins.bundle.js"></script>
    <script src="dist/js/scripts.bundle.js"></script>

</body>

</x-app-layout>