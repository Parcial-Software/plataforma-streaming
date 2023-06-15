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
            <div class="hero" style="background-image: url(images/banner/portada-5.png)"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="container under-hero">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="row">
                        <div class="px-4 mx-auto mb-5 col-xl-8 px-md-5 px-xl-0">
                            <h1>Varida Meronny music band</h1>
                            <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                            <ul class="mt-3 info-list info-list--dotted">
                                <li>
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
                                </li>
                                <li>100 seats only</li>
                                <li class="fw-semi-bold">Dec 14, 2022</li>
                            </ul>
                            <!-- End:: info list -->
                            <a href="#" class="mt-4 btn btn-primary" style="min-width: 140px;">
                                <div class="btn__wrap">
                                    <i class="ri-add-circle-line"></i>
                                    <span>Join Event</span>
                                </div>
                            </a>
                        </div>
                        <div class="mx-auto mb-5 col-xl-10">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <div class="cover__image">
                                    <img src="images/background/horizontal/3.jpg" alt="Event cover">
                                </div>
                            </div>
                            <!-- End:: cover -->
                        </div>
                        <div class="px-4 mx-auto col-xl-8 px-md-5 px-xl-0">
                            <div class="mb-4 row fs-6">
                                <div class="mb-3 col-sm-6 d-flex">
                                    <i class="ri-map-pin-2-fill fs-5"></i>
                                    <div class="ps-3">
                                        <span class="mb-2 d-block fw-semi-bold text-dark">Venue At</span>
                                        <p>2102 Tennessee Avenue, <br>Plymouth MI - 48170</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 d-flex align-items-center">
                                        <i class="ri-phone-fill fs-5"></i>
                                        <a href="tel:+0734-637-0374" class="ms-3 text-dark">0734-637-0374</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="ri-mail-open-fill fs-5"></i>
                                        <a href="mailto:y65nl6lt7pf@payspun.com" class="ms-3 text-dark">y65nl6lt7pf@payspun.com</a>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut consectetur delectus dolorum facere illo in iure, modi, molestias mollitia nam nobis porro, quaerat quos recusandae sapiente suscipit voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloremque eum illum maiores nobis provident quis unde vel voluptas voluptate. Aspernatur ducimus explicabo laborum possimus quam reiciendis totam ullam vero?</p>
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

</body>

</x-app-layout>