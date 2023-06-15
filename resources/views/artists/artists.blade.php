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
                <div class="hero" style="background-image: url(images/banner/artists.jpg);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="under-hero container">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <h3 class="mb-0">Featured <span class="text-primary">Artists</span></h3>
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
                            <h3 class="mb-0">Top <span class="text-primary">Artists</span></h3>
                        </div>

                        <div class="row g-4">
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/1.jpg" alt="Arebica Luna">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Arebica Luna</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/2.jpg" alt="Gerrina Linda">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Gerrina Linda</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/3.jpg" alt="Zunira Willy">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Zunira Willy</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/4.jpg" alt="Johnny Marro">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Johnny Marro</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/5.jpg" alt="Jina Moore">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Jina Moore</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/6.jpg" alt="Rasomi Pelina">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Rasomi Pelina</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/7.jpg" alt="Pimila Holliwy">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Pimila Holliwy</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/8.jpg" alt="Karen Jennings">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Karen Jennings</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/9.jpg" alt="Lenisa Gory">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Lenisa Gory</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/10.jpg" alt="Nutty Nina">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Nutty Nina</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/1.jpg" alt="Arebica Luna">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Arebica Luna</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/2.jpg" alt="Gerrina Linda">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Gerrina Linda</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/3.jpg" alt="Zunira Willy">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Zunira Willy</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/4.jpg" alt="Johnny Marro">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Johnny Marro</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/5.jpg" alt="Jina Moore">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Jina Moore</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/6.jpg" alt="Rasomi Pelina">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Rasomi Pelina</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/7.jpg" alt="Pimila Holliwy">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Pimila Holliwy</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                            <div class="col-6 col-xl-2 col-md-3 col-sm-4">
                                <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                <a href="artist-details.html" class="cover cover--round">
                                    <div class="cover__image">
                                        <img src="images/cover/large/8.jpg" alt="Karen Jennings">
                                    </div>
                                    <div class="cover__foot">
                                        <span class="cover__title text-truncate">Karen Jennings</span>
                                    </div>
                                </a>
                                <!-- End:: cover -->
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <a href="javascript:void(0);" class="btn btn-primary">
                                <div class="btn__wrap">
                                    <i class="ri-loader-3-fill"></i>
                                    <span>Load more</span>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- End:: section -->

                </div>
                <!-- End:: under hero -->

                <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
                <footer id="footer">
                    <div class="container">
                        <div class="text-center mb-4">
                            <a href="mailto:info@listenapp.com" class="display-5 email">info@listenapp.com</a>
                        </div>
                        <div class="app-btn-group pt-2">
                            <a href="#" class="btn btn-lg btn-primary">
                                <div class="btn__wrap">
                                    <i class="ri-google-play-fill"></i>
                                    <span class="ms-2">Google Play</span>
                                </div>
                            </a>
                            <a href="#" class="btn btn-lg btn-primary">
                                <div class="btn__wrap">
                                    <i class="ri-app-store-fill"></i>
                                    <span class="ms-2">App Store</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </footer>
                <!-- End:: footer -->

            </main>
            <!-- End:: page content -->

        </div>
        <!-- End:: wrapper -->

        <!-- Backdrop [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="backdrop"></div>

    </body>

</x-app-layout>