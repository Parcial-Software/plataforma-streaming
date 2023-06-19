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
                <div class="hero" style="background-image: url(images/banner/portada-1.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="section__head align-items-center">
                            <span class="d-block pe-3 fs-6 fw-semi-bold">5240 Songs in the list</span>
                            <div>
                                <select class="form-select" aria-label="Filter song">
                                    <option value="Popular">Popular</option>
                                    <option value="Most played">Most played</option>
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
                                            data-song-name="{{ $song['name'] }}"
                                            data-song-artist="{{ $song['artist'] }}"
                                            data-song-album="{{ $song['albumId'] }}"
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

            </main>
            <!-- End:: page content -->

        </div>
        <!-- End:: wrapper -->

        <!-- Backdrop [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="backdrop"></div>


    </body>

</x-app-layout>