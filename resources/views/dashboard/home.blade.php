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
                                <span class="section__subtitle">ESCUCHA LAS MEJORES LISTAS</span>
                                <h3 class="mb-0">Las Canciones <span class="text-primary">mas Populares</span></h3>
                            </div>
                            <a href="songs.html" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    @foreach ($songs as $song)
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round"
                                            data-song-id="{{ $song['id'] }}"
                                            data-song-name="{{ $song['name'] }}"
                                            data-song-artist="{{ $song['artist'] }}"
                                            data-song-album="{{ $song['album'] }}"
                                            data-song-url="{{ $song['fileUrl'] }}"
                                            data-song-cover="{{ $song['imageUrl'] }}">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-danger">
                                                            <i class="ri-heart-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                                        aria-label="Cover options" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                                data-favorite-id="{{ $song['id'] }}">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                                data-playlist-id="{{ $song['id'] }}">Add to playlist</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                                data-queue-id="{{ $song['id'] }}">Add to queue</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                                data-next-id="{{ $song['id'] }}">Next to play</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                                data-play-id="{{ $song['id'] }}">Play</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cover__image">
                                                <img src="{{ $song['imageUrl'] }}" alt="{{ $song['name'] }}"style="width: 300px; height: 250px;">
                                                <button type="button" class="btn btn-play btn-default btn-icon rounded-pill"
                                                    data-play-id="{{ $song['id'] }}">
                                                    <i class="ri-play-fill icon-play"></i>
                                                    <i class="ri-pause-fill icon-pause"></i>
                                                </button>
                                            </div>
                                            <div class="cover__foot">
                                                <a href="song-details.html" class="cover__title text-truncate">{{ $song['name'] }}</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">{{ $song['artist'] }}</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    @endforeach
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

                       
                    </div>



                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <span class="section__subtitle">TENDENCIA A ESCUCHAR</span>
                                <h3 class="mb-0">Los Mejores <span class="text-primary">Albums</span></h3>
                            </div>
                            <a href="{{route('album.index')}}" class="btn btn-link">View All</a>
                        </div>

                        <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                        <div class="list list--lg list--order">
                            <div class="row">
                                @foreach ($albums as $album)
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="{{ $album['imageUrl'] }}" alt="{{ $album['name'] }}">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">{{ $album['name'] }}</a>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex" aria-label="Favorite"
                                                    data-favorite-id="{{ $album['id'] }}">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                                    aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                            data-favorite-id="{{ $album['id'] }}">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="{{route('album.index')}}">View details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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