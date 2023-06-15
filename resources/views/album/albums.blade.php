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
                            <h3 class="mb-0">Mejores<span class="text-primary">Albunes</span></h3>
                        </div>

                        <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper-carousel swiper-carousel-button">
                            <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                            <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                                <div class="swiper-wrapper">
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
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                        data-bs-toggle="dropdown" aria-label="Cover options"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button" data-favorite-id="100">Favorito</a></li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-1.mp3"
                                                                download>Descargar</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Compartir</a></li>
                                                        <li class="dropdown-divider"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/1.jpg" alt="Mummy">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html"
                                                    class="cover__title text-truncate">Mummy</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Arebica Luna</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                        data-bs-toggle="dropdown" aria-label="Cover options"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button" data-favorite-id="101">Favorite</a></li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-2.mp3"
                                                                download>Download</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="album-details.html">View
                                                                details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/2.jpg" alt="Hot shot">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html" class="cover__title text-truncate">Hot
                                                    shot</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Gerrina Linda</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__head">
                                                <div class="cover__options dropstart d-inline-flex ms-auto">
                                                    <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                        data-bs-toggle="dropdown" aria-label="Cover options"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button" data-favorite-id="102">Favorite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-3.mp3"
                                                                download>Download</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="album-details.html">View
                                                                details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/3.jpg" alt="Own way">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html" class="cover__title text-truncate">Own
                                                    way</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Zunira Willy</a>,
                                                    <a href="artist-details.html">Nutty Nina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
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
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
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
                                                                role="button" data-favorite-id="103">Favorite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-4.mp3"
                                                                download>Download</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="album-details.html">View
                                                                details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/4.jpg" alt="Say yes">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html" class="cover__title text-truncate">Say
                                                    yes</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Johnny Marro</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
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
                                                                role="button" data-favorite-id="104">Favorite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-5.mp3"
                                                                download>Download</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="album-details.html">View
                                                                details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/5.jpg" alt="Letter">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html"
                                                    class="cover__title text-truncate">Letter</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Jina Moore</a>,
                                                    <a href="artist-details.html">Lenisa Gory</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                        <div class="cover cover--round">
                                            <div class="cover__head">
                                                <ul class="cover__label d-flex">
                                                    <li>
                                                        <span class="badge rounded-pill bg-info">
                                                            <i class="ri-vip-crown-fill"></i>
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
                                                                role="button" data-favorite-id="105">Favorite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="audio/ringtone-6.mp3"
                                                                download>Download</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                role="button">Share</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="album-details.html">View
                                                                details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="album-details.html" class="cover__image">
                                                <img src="images/cover/large/6.jpg" alt="Find soul">
                                            </a>
                                            <div class="cover__foot">
                                                <a href="album-details.html" class="cover__title text-truncate">Find
                                                    soul</a>
                                                <p class="cover__subtitle text-truncate">
                                                    <a href="artist-details.html">Rasomi Pelina</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End:: cover -->
                                    </div>
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
                        <div class="list list--lg">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/1.jpg" alt="Mummy">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Mummy</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Arebica Luna</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="100">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="100">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/2.jpg" alt="Hot shot">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Hot
                                                shot</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Gerrina Linda</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="101">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="101">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-2.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/3.jpg" alt="Own way">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Own way</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Zunira Willy & Nutty Nina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="102">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="102">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-3.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/4.jpg" alt="Say yes">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Say yes</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Johnny Marro</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="103">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="103">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-4.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/5.jpg" alt="Letter">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Letter</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Jina Moore & Lenisa Gory</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="104">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="104">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-5.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/6.jpg" alt="Find soul">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Find
                                                soul</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Rasomi Pelina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="105">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="105">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-6.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/7.jpg" alt="Deep inside">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Deep
                                                inside</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Pimila Holliwy</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="106">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="106">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-7.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/8.jpg" alt="Sadness">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Sadness</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Karen Jennings</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="107">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="107">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-8.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/9.jpg" alt="Electric wave">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Electric
                                                wave</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Lenisa Gory</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="108">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="108">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-1.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list__item">
                                        <a href="album-details.html" class="list__cover">
                                            <img src="images/cover/small/10.jpg" alt="Lover soul">
                                        </a>
                                        <div class="list__content">
                                            <a href="album-details.html" class="list__title text-truncate">Lover
                                                soul</a>
                                            <p class="list__subtitle text-truncate">
                                                <a href="artist-details.html">Nutty Nina</a>
                                            </p>
                                        </div>
                                        <ul class="list__option">
                                            <li>
                                                <span class="badge rounded-pill bg-info">
                                                    <i class="ri-vip-crown-fill"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                    aria-label="Favorite" data-favorite-id="109">
                                                    <i class="ri-heart-line heart-empty"></i>
                                                    <i class="ri-heart-fill heart-fill"></i>
                                                </a>
                                            </li>
                                            <li class="dropstart d-inline-flex">
                                                <a class="dropdown-link" href="javascript:void(0);" role="button"
                                                    data-bs-toggle="dropdown" aria-label="Cover options"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button" data-favorite-id="109">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="audio/ringtone-2.mp3"
                                                            download>Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
</x-app-layout>
