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
                <div class="hero" style="background-image: url(images/banner/analytics.jpg);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="under-hero container">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="mb-5 fs-6">
                            <h3>Hi <span class="text-primary">Admin</span>, Welcome to the Listen App</h3>
                            <p>Select your music to listen & download free and premium music.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-5">
                                <div class="card bg-primary text-white">
                                    <div class="card-body fs-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="text-white mb-0">Total Earnings</h4>
                                            <button type="button" class="btn btn-icon text-white ms-auto">
                                                <i class="ri-settings-fill"></i>
                                            </button>
                                        </div>
                                        <p>Voluptatem ut, facilis ipsum, nostrum quia officia dolor mollitia temporibus hic aspernatur laborum.</p>
                                        <span class="display-4 d-block mb-3">$126,457</span>
                                        <button type="button" class="btn btn-warning rounded-pill">Get Details</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="row h-100">
                                    <div class="col-sm-4">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5>Total Users</h5>
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="ri-user-3-fill fs-5"></i>
                                                    <p class="fw-medium ps-2">10,245</p>
                                                </div>
                                            </div>
                                            <div style="height: 160px">
                                                <canvas id="total_user"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-4 mt-sm-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5>Total Songs</h5>
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="ri-music-fill fs-5"></i>
                                                    <p class="fw-medium ps-2">58,415</p>
                                                </div>
                                            </div>
                                            <div style="height: 160px">
                                                <canvas id="total_songs"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-4 mt-sm-0">
                                        <div class="card h-100 bg-warning">
                                            <div class="card-body">
                                                <h5 class="text-black">Purchases</h5>
                                                <div class="d-flex align-items-center text-black">
                                                    <i class="ri-currency-fill fs-5"></i>
                                                    <p class="fw-medium ps-2">11,012,547</p>
                                                </div>
                                            </div>
                                            <div style="height: 160px">
                                                <canvas id="purchases"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="mb-0">User Statistics</h5>
                                    </div>
                                    <div class="card-body">
                                        <div style="height: 300px">
                                            <canvas id="user_statistics"></canvas>
                                        </div>
                                        <div class="text-center">
                                            <span class="fw-bold fs-6 d-block mt-3 mb-2 text-dark">Top Countries</span>
                                            <div class="row">
                                                <div class="col-4 border-right">
                                                    <div class="py-2 px-sm-3">
                                                        <span class="d-block">USA</span>
                                                        <p class="fw-bold">1,243</p>
                                                    </div>
                                                </div>
                                                <div class="col-4 border-right">
                                                    <div class="py-2 px-sm-3">
                                                        <span class="d-block">UK</span>
                                                        <p class="fw-bold">643</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="py-2 px-sm-3">
                                                        <span class="d-block">Canada</span>
                                                        <p class="fw-bold">351</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="mb-0">Referrals</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item border-0 px-0 py-3">
                                                <p class="fs-4 mb-1 fw-semi-bold">3421</p>
                                                <p class="mb-2 fw-medium">Visits from Facebook</p>
                                                <div class="progress" style="height: .25rem">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 px-0 py-3">
                                                <p class="fs-4 mb-1 fw-semi-bold">2401</p>
                                                <p class="mb-2 fw-medium">Visits from Instagram</p>
                                                <div class="progress" style="height: .25rem">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 67%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 px-0 py-3">
                                                <p class="fs-4 mb-1 fw-semi-bold">975</p>
                                                <p class="mb-2 fw-medium">Visits from Twitter</p>
                                                <div class="progress" style="height: .25rem">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 31%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 px-0 py-3">
                                                <p class="fs-4 mb-1 fw-semi-bold">1672</p>
                                                <p class="mb-2 fw-medium">Visits from Affiliates</p>
                                                <div class="progress" style="height: .25rem">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 52%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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