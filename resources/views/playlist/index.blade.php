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
                            <span class="d-block pe-3 fs-6 fw-semi-bold">{{ count($playlists) }} Playlist </span>
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
                        <div>
                            @foreach ($playlists as $playlist)
                                <div class="section__head">
                                    <h3 class="mb-0">Playlist <span class="text-primary">
                                            {{ $playlist['name'] }}</span>
                                    </h3>
                                </div>
                                <div class="list">
                                    @foreach ($playlist['playlistSongs'] as $playlistSong)
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="list__item" data-song-id="{{ $playlistSong['song']['id'] }}"
                                                    data-song-name="{{ $playlistSong['song']['name'] }}"
                                                    data-song-artist="{{ $playlistSong['song']['artist'] }}"
                                                    data-song-album="{{ $playlistSong['song']['albumId'] }}"
                                                    data-song-url="{{ $playlistSong['song']['fileUrl'] }}"
                                                    data-song-cover="{{ $playlistSong['song']['imageUrl'] }}">

                                                    <div class="list__cover">
                                                        <img src="{{ $playlistSong['song']['imageUrl'] }}"
                                                            alt="{{ $playlistSong['song']['name'] }}">
                                                        <a href=""
                                                            class="btn btn-play btn-sm btn-default btn-icon rounded-pill"
                                                            data-play-id="{{ $playlistSong['song']['id'] }}"
                                                            aria-label="Play pause">
                                                            <i class="ri-play-fill icon-play"></i>
                                                            <i class="ri-pause-fill icon-pause"></i>
                                                        </a>
                                                    </div>
                                                    <div class="list__content">
                                                        <a href="song-details.html"
                                                            class="list__title text-truncate">{{ $playlistSong['song']['name'] }}</a>
                                                        <p class="list__subtitle text-truncate">
                                                            <a
                                                                href="artist-details.html">{{ $playlistSong['song']['artist'] }}</a>
                                                        </p>
                                                    </div>
                                                    <ul class="list__option">
                                                        <li>
                                                            <a href="javascript:void(0);" role="button"
                                                                class="d-inline-flex" aria-label="Favorite"
                                                                data-favorite-id="{{ $playlistSong['song']['id'] }}">
                                                                <i class="ri-heart-line heart-empty"></i>
                                                                <i class="ri-heart-fill heart-fill"></i>
                                                            </a>
                                                        </li>


                                                        <li><span class="amplitude-duration-minutes"></span>:<span
                                                                class="amplitude-duration-seconds"></span></li>

                                                        <li class="dropstart d-inline-flex">
                                                            <a class="dropdown-link" href="javascript:void(0);"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-label="Cover options" aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                                        role="button">Add to queue</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                                        role="button">Next to play</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                                        role="button">Share</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                                        role="button"
                                                                        data-play-id="{{ $playlistSong['song']['id'] }}">Play</a>
                                                                </li>
                                                                <li>
                                                                    <button
                                                                        class="px-3 py-1 bg-#92929F rounded-sm flex items-start min-w-32">
                                                                        <span class="font-semibold text-start">Añadir
                                                                            Playlist</span>
                                                                        <span>
                                                                            <svg class="w-4 h-4 transition duration-150 ease-in-out transform fill-current group-hover:-rotate-180"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <ul
                                                                        class="absolute transition duration-150 ease-in-out origin-top-right transform scale-0 bg-black group-hover:scale-100 min-w-32">
                                                                        <li><a class="dropdown-item"
                                                                                href="{{ route('playlist.create') }}"
                                                                                download>Crear Playlist</a></li>
                                                                        <li class="divider"></li>
                                                                        <!-- Línea divisoria -->

                                                                        @foreach ($playlists as $playlist)
                                                                            <form method="POST"
                                                                                action="{{ route('playlist.playlistSong', ['playlistId' => $playlist['id'], 'songId' => $playlistSong['song']['id']]) }}">
                                                                                @csrf
                                                                                <li>
                                                                                    <button type="submit"
                                                                                        class="playlist-button">{{ $playlist['name'] }}</button>
                                                                                </li>
                                                                            </form>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="playlist-divider"></div>
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
    <style>
        .playlist-button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 8px 20px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .playlist-button:hover {
            background-color: #333;
        }

        .playlist-divider {
            margin-bottom: 20px;
            /* Ajusta el valor según el espaciado deseado */
        }

        .divider {
            border-bottom: 1px solid white;
            /* Estilo de la línea divisoria */
            margin: 8px 0;
            /* Espacio alrededor de la línea divisoria */
        }

        li>ul {
            transform: translatex(100%) scale(0)
        }

        li:hover>ul {
            transform: translatex(101%) scale(1)
        }

        li>button svg {
            transform: rotate(-90deg)
        }

        li:hover>button svg {
            transform: rotate(-270deg)
        }

        .group:hover .group-hover\:scale-100 {
            transform: scale(1)
        }

        .group:hover .group-hover\:-rotate-180 {
            transform: rotate(180deg)
        }

        .scale-0 {
            transform: scale(0)
        }

        .min-w-32 {
            min-width: 8rem
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>
