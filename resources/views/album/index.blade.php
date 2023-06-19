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
                <div class="hero" style="background-image: url(images/banner/portada-4.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">
                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head">
                            <h3 class="mb-0">Mejores<span class="text-primary"> Albums</span></h3>
                        </div>
                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" id="albumsSwiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    @foreach ($albums as $album)
                                        <div class="swiper-slide">
                                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                            <div class="cover cover--round">
                                                <div class="cover__head">
                                                    <ul class="cover__label d-flex">
                                                        <li>
                                                            <span class="badge rounded-pill bg-danger">
                                                                <i class="ri-heart-fill"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                                        <a class="dropdown-link" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-label="Cover options" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-sm">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"
                                                                    role="button" data-favorite-id="100">Favorito</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="{{ $album['imageUrl']}}"
                                                                    download>Descargar</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"
                                                                    role="button">Compartir</a></li>
                                                            <li class="dropdown-divider"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="#" class="cover__image">
                                                    <img src="{{ $album['imageUrl'] }}" alt="{{ $album['name'] }}"
                                                        style="width: 200px; height: 200px;">
                                                </a>
                                                <div class="cover__foot">
                                                    <a href="album-details.html"
                                                        class="cover__title text-truncate">{{ $album['name'] }}</a>
                                                </div>
                                            </div>
                                            <!-- End:: cover -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End:: swiper -->

                        <!-- Swiper controls -->
                        <div class="swiper-button-prev btn-default rounded-pill" onclick="prevSwiper('albumsSwiper')">
                        </div>
                        <div class="swiper-button-next btn-default rounded-pill" onclick="nextSwiper('albumsSwiper')">
                        </div>
                    </div>
                    <!-- End:: swiper carousel -->

                    <div class="section">
                        <div class="section__head">
                            <h3 class="mb-0">Mis<span class="text-primary"> Albums</span></h3>
                        </div>
                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" id="userAlbumsSwiper" data-swiper-slides="5"
                                data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
                                    @foreach ($userAlbums as $userAlbum)
                                        <div class="swiper-slide">
                                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                            <div class="cover cover--round">
                                                <div class="cover__head">
                                                    <ul class="cover__label d-flex">
                                                        <li>
                                                            <span class="badge rounded-pill bg-danger">
                                                                <i class="ri-heart-fill"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                                        <a class="dropdown-link" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-label="Cover options" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-sm">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"
                                                                    role="button" data-favorite-id="100">Favorito</a>
                                                            </li>
                                                         
                                                            <li><a class="dropdown-item" href="javascript:void(0);"
                                                                    role="button">Compartir</a></li>
                                                            <li class="dropdown-divider"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="album-details.html" class="cover__image">
                                                    <img src="{{ $userAlbum['imageUrl'] }}"
                                                        alt="{{ $userAlbum['name'] }}"
                                                        style="width: 200px; height: 200px;">
                                                </a>
                                                <div class="cover__foot">
                                                    <a href="album-details.html"
                                                        class="cover__title text-truncate">{{ $userAlbum['name'] }}</a>
                                                </div>
                                            </div>
                                            <!-- End:: cover -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End:: swiper -->

                        <!-- Swiper controls -->
                        <div class="swiper-button-next btn-default rounded-pill"
                            onclick="prevSwiper('userAlbumsSwiper')"></div>
                        <div class="swiper-button-next btn-default rounded-pill"
                            onclick="nextSwiper('userAlbumsSwiper')"></div>
                    </div>
                </div>
                <!-- End:: section -->

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head align-items-center">
                        <span class="d-block pe-3 fs-6 fw-semi-bold">10245 Albums in the list</span>
                        <div>
                            <select class="form-select" aria-label="Filter album">
                                <option value="Popular">Popular</option>
                                <option value="Most loved">Most loved</option>
                                <option value="A to Z">A to Z</option>
                                <option value="Z to A">Z to A</option>
                            </select>
                        </div>
                    </div>

                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                    <div class="list">
                        @foreach ($songs as $song)
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="list__item" data-song-id="{{ $song['id'] }}"
                                        data-song-name="{{ $song['name'] }}" data-song-artist="{{ $song['artist'] }}"
                                        data-song-album="{{ $song['album'] }}"
                                        data-song-url="{{ $song['fileUrl'] }}"
                                        data-song-cover="{{ $song['imageUrl'] }}">
                                        <div class="list__cover">
                                            <img src="{{ $song['imageUrl'] }}" alt="{{ $song['name'] }}">
                                            <a href="javascript:void(0);"
                                                class="btn btn-play btn-sm btn-default btn-icon rounded-pill"
                                                data-play-id="{{ $song['id'] }}" aria-label="Play pause">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </a>
                                        </div>
                                        <div class="list__content">
                                            <a href="song-details.html"
                                                class="list__title text-truncate">{{ $song['name'] }}</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">{{ $song['artist'] }}</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="{{ $song['id'] }}">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li>01:14</li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Add to queue</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Next to play</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button"
                                                            data-play-id="{{ $song['id'] }}">Play</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End:: list -->


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

    </body>

    <!-- Script para controlar el funcionamiento del swiper -->
    <script>
        function prevSwiper(swiperId) {
            const swiper = document.getElementById(swiperId).swiper;
            swiper.slidePrev();
        }

        function nextSwiper(swiperId) {
            const swiper = document.getElementById(swiperId).swiper;
            swiper.slideNext();
        }
    </script>
</x-app-layout>