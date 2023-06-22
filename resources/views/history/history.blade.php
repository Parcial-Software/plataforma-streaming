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
                <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">Recently listened</span>
                                <h3 class="mb-0">History</h3>
                            </div>
                            <a href="#" class="btn btn-link">Clear All</a>
                        </div>

                        <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                        <div class="list list--order">
                            @foreach($histories as $history)
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="list__item" data-song-id="{{ $history['song']['id'] }}"
                                    data-song-name="{{ $history['song']['name'] }}"
                                    data-song-artist="{{ $history['song']['artist'] }}"
                                    data-song-album="{{ $history['song']['albumId'] }}"
                                    data-song-url="{{ $history['song']['fileUrl'] }}"
                                    data-song-cover="{{ $history['song']['imageUrl'] }}">
                                        <div class="list__cover">
                                            <img src="{{ $history['song']['imageUrl'] }}" alt="{{ $history['song']['name'] }}">
                                            <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="{{ $history['song']['id'] }}" aria-label="Play pause">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </a>
                                        </div>
                                        <div class="list__content">
                                            <a href="song-details.html" class="list__title text-truncate">{{ $history['song']['name'] }}</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">{{ $history['song']['artist'] }}</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="{{ $history['song']['id'] }}">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="{{ $history['song']['id'] }}">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="{{ $history['song']['id'] }}">Add to queue</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="{{ $history['song']['id'] }}">Next to play</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="{{ $history['song']['id'] }}">Play</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- End:: list -->
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