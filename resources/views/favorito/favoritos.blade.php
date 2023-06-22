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
                <div class="hero" style="background-image: url(images/banner/portada-3.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <h3 class="mb-0">Songs</h3>
                        </div>

                        <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                        <div class="list list--order">
                            @foreach($favorites as $favorite)
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="list__item" data-song-id="{{ $favorite['song']['id'] }}"
                                    data-song-name="{{ $favorite['song']['name'] }}"
                                    data-song-artist="{{ $favorite['song']['artist'] }}"
                                    data-song-album="{{ $favorite['song']['albumId'] }}"
                                    data-song-url="{{ $favorite['song']['fileUrl'] }}"
                                    data-song-cover="{{ $favorite['song']['imageUrl'] }}">
                                        <div class="list__cover">
                                            <img src="{{ $favorite['song']['imageUrl'] }}" alt="{{ $favorite['song']['name'] }}">
                                            <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="{{ $favorite['song']['id'] }}" aria-label="Play pause">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </a>
                                        </div>
                                        <div class="list__content">
                                            <a href="song-details.html" class="list__title text-truncate">{{ $favorite['song']['name'] }}</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">{{ $favorite['song']['artist'] }}</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex active" aria-label="Favorite" data-favorite-id="{{ $favorite['song']['id'] }}">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="{{ $favorite['song']['id'] }}">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="{{ $favorite['song']['id'] }}">Add to queue</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="{{ $favorite['song']['id'] }}">Next to play</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="{{ $favorite['song']['id'] }}">Play</a></li>
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

            </main>
            <!-- End:: page content -->

        </div>
        <!-- End:: wrapper -->

        <!-- Backdrop [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="backdrop"></div>


    </body>
</x-app-layout>
