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
                <div class="hero" style="background-image: url(images/banner/portada-7.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <!-- Start:: plan [[ Find at scss/framework/plan.scss ]] -->
                        <div class="plan bg-light">
                            <div class="overflow-hidden card plan__info">
                                <div class="p-0 card-body d-flex flex-column">
                                    <div class="p-4">
                                        <h4 class="mb-3">Plan <span class="text-primary">{{ $plans[0]['name'] }}</span></h4>
                                        <p class="opacity-50 fs-6">Lo que obtendrás</p>
                                        <div class="mb-3 d-flex">
                                            <i class="opacity-75 ri-checkbox-circle-fill text-primary fs-6"></i>
                                            <span class="ps-2">{{ $plans[1]['description'] }}</span>
                                        </div>
                                    </div>
                                    <div class="pb-4 mt-5 card-footer pb-sm-0">
                                        <div class="mb-3 text-dark"><span class="fs-4 fw-bold">$ {{ $plans[0]['price'] }}</span></div>
                                        <button type="button" class="btn btn-outline-primary w-100" onclick="window.location='/payment'">Comprar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="plan__data">
                                <div class="card plan__col">
                                    <div class="card-body fw-medium">
                                        <div class="mb-4 d-flex align-items-center text-dark">
                                            <i class="ri-music-2-line fs-3"></i>
                                            <h4 class="mb-0 ps-3">Plan <span class="text-primary">{{ $plans[1]['name'] }}</span></h4>
                                        </div>
                                        <p class="opacity-50 fs-6">Lo que obtendrás</p>
                                        <div class="mb-3 d-flex">
                                            <i class="opacity-75 ri-checkbox-circle-fill text-primary fs-6"></i>
                                            <span class="ps-2">{{ $plans[1]['description'] }}</span>
                                        </div>
                                    </div>
                                    <div class="pb-4 card-footer pb-sm-0">
                                        <div class="mb-3 text-dark"><span class="fs-4 fw-bold">$ {{ $plans[1]['price'] }}</span></div>
                                        <button type="button" class="btn btn-outline-primary w-100" onclick="window.location='/payment'">Comprar</button>
                                    </div>
                                </div>
                                <div class="card plan__col">
                                    <div class="card-body fw-medium">
                                        <div class="mb-4 d-flex align-items-center text-dark">
                                            <i class="ri-vip-crown-line fs-3"></i>
                                            <h4 class="mb-0 ps-3">Plan <span class="text-primary">{{ $plans[2]['name'] }}</span></h4>
                                        </div>
                                        <p class="opacity-50 fs-6">Lo que obtendrás</p>
                                        <div class="mb-3 d-flex">
                                            <i class="opacity-75 ri-checkbox-circle-fill text-primary fs-6"></i>
                                            <span class="ps-2">{{ $plans[2]['description'] }}</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="mb-3 text-dark"><span class="fs-4 fw-bold">$ {{ $plans[2]['price'] }}</span></div>
                                        <button type="button" class="btn btn-outline-primary w-100" onclick="window.location='/payment'">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: plan -->
                    </div>
                    <!-- End:: section -->

                </div>
                <!-- End:: under hero -->

                <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
                <footer id="footer">
                    <div class="container">
                        <div class="mb-4 text-center">
                            <a href="mailto:info@listenapp.com" class="display-5 email">info@listenapp.com</a>
                        </div>
                        <div class="pt-2 app-btn-group">
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