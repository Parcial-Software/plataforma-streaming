<x-guest-layout>

    <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
    <header id="main_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a href="index.html" class="brand external">
                    <img src="{{ asset('images/logos/logo-sound3.png') }}" alt="Listen app">
                </a>
                <div class="d-flex align-items-center navbar-ex">
                    <a class="text-white btn btn-gradient-info external" href="{{ route('register') }}">Regístrate</a>
                    <a class="btn btn-dark external ms-3" href="{{ route('login') }}">Iniciar
                        Sesión</a>

                    <button class="navbar-toggler ms-3 ms-sm-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ri-menu-3-fill"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mx-auto mt-4 navbar-nav mt-lg-0 fw-semi-bold">
                        <li class="nav-item">
                            <a class="nav-link external" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link external" href="#about">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link external" href="#blog">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link external" href="#contact">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End:: header -->

    <body>
        <div class="container-fluid px-xl-4">
            <!-- Start:: main hero [[ Find at scss/framework/hero.scss ]] -->
            <div id="carouselExampleCaptions" class="mx-auto carousel slide main-hero" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto main-hero" style="background-image: url(images/background/portada.jpg);">
                            <div class="container">
                                <div class="col-xl-6 col-lg-8 col-md-9 fs-5">
                                    <h1 class="mb-3 main-hero__title">Música para llenar tu <span class="text-primary">corazón.</span></h1>
                                    <div class="me-sm-5">
                                        <p>Explora playlists y álbumes inspirados en los artistas y géneros que más te
                                            apasionan.</p>
                                        <a class="btn btn-light btn-lg btn-default external" href="register.html">Pruébalo
                                            gratis</a>
                                        <a class="btn btn-lg btn-outline-dark external" href="home.html">Iniciar
                                            Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mx-auto main-hero" style="background-image: url(images/background/portada-2.jpg);">
                            <div class="container">
                                <div class="col-xl-6 col-lg-8 col-md-9 fs-5">
                                    <h1 class="mb-3 main-hero__title">¡Descubre la magia de la música <span class="text-primary">que llena tu alma!</span></h1>
                                    <div class="me-sm-5">
                                        <p>Sumérgete en un mundo de listas de reproducción y álbumes inspirados en tus
                                            artistas y géneros favoritos. ¡Experimenta la emoción de cada nota y deja
                                            que la
                                            música te lleve a un viaje inolvidable! </p>
                                        <a class="btn btn-light btn-lg btn-default external" href="register.html">Pruébalo
                                            gratis</a>
                                        <a class="btn btn-lg btn-outline-dark external" href="home.html">Iniciar
                                            Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mx-auto main-hero" style="background-image: url(images/background/portada-5.jpg);">
                            <div class="container">
                                <div class="col-xl-6 col-lg-8 col-md-9 fs-5">
                                    <h1 class="mb-3 main-hero__title">¡Descubre el ritmo que hace <span class="text-primary">latir tu corazón!</span></h1>
                                    <div class="me-sm-5">
                                        <p class="text-white">Sumérgete en un mundo musical lleno de listas de
                                            reproducción
                                            y álbumes que capturan la esencia de tus artistas y géneros favoritos. </p>
                                        <a class="btn btn-light btn-lg btn-default external " href="register.html">Pruébalo
                                            gratis</a>
                                        <a class="btn btn-lg btn-outline-dark external" href="home.html">Iniciar
                                            Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        </div>




        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section" id="about">
            <div class="container">
                <div class="mx-auto mb-5 text-center col-xl-6 col-lg-8 fs-5">
                    <h2>Características de<span class="text-primary"> SoundStream</span></h2>
                    <p>Sumérgete en un océano de sonidos con SoundStream: tu fuente inagotable de música en streaming.
                    </p>
                </div>
                <!-- Start:: feature [[ Find at scss/framework/core.scss ]] -->
                <div class="feature">
                    <div class="row g-4 g-md-5">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-blue);">
                                        <i class="ri-music-2-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Millones de pistas</h5>
                                    <p> Explora millones de pistas de todos los géneros, artistas y épocas en un solo
                                        lugar.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-pink);">
                                        <i class="ri-question-answer-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Comentarios y reseñas</h5>
                                    <p>Descubre la música que te encanta y comparte tus opiniones con nuestra función de
                                        comentarios y reseñas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-purple);">
                                        <i class="ri-calendar-event-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Eventos musicales</h5>
                                    <p>Vive la música en su máximo esplendor con nuestros eventos musicales en
                                        SoundStream.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-indigo);">
                                        <i class="ri-donut-chart-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Análisis de datos</h5>
                                    <p>"Con nuestro potente análisis de datos, desbloquea el poder de la información
                                        detrás
                                        de la música. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-red);">
                                        <i class="ri-radio-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Transmisión en vivo</h5>
                                    <p>Experimenta la emoción en tiempo real con nuestra función de transmisión en vivo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-orange);">
                                        <i class="ri-vip-crown-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Plan de suscripción</h5>
                                    <p>Descubre el plan de suscripción perfecto en SoundStream y disfruta de una
                                        experiencia
                                        musical sin límites.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="py-2 card h-100">
                                <div class="card-body">
                                    <div class="feature__icon" style="color: var(--bs-green);">
                                        <i class="ri-user-4-fill fs-4"></i>
                                    </div>
                                    <h5 class="mt-4 mb-3">Gestión de usuarios</h5>
                                    <p>Simplifica la gestión de usuarios con nuestra poderosa función de gestión de
                                        usuarios
                                        en SoundStream.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: feature -->
            </div>
        </div>
        <!-- End:: main section -->



        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div id="pricing" class="main-section">
            <div class="container">
                <div class="mb-5 text-center">
                    <h2>Planes <span class="text-primary">Flexibles</span></h2>
                </div>
                <div class="pt-4 mx-auto col-xl-11 col-lg-8">
                    <!-- Start:: plan [[ Find at scss/framework/plan.scss ]] -->
                    <div class="plan bg-light">
                        <div class="card plan__info overflow-hidden">
                            <div class="card-body d-flex flex-column p-0">
                                <div class="p-4">
                                    <h4 class="mb-3">Plan <span class="text-primary">{{ $plans[0]['name'] }}</span></h4>
                                    <p class="fs-6 opacity-50">Lo que obtendrás</p>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">{{ $plans[1]['description'] }}</span>
                                    </div>
                                </div>
                                <div class="card-footer mt-5 pb-4 pb-sm-0">
                                    <div class="text-dark mb-3"><span class="fs-4 fw-bold">$ {{ $plans[0]['price'] }}</span></div>
                                    <button type="button" class="btn btn-primary w-100" onclick="window.location='/login'">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="plan__data">
                            <div class="card plan__col">
                                <div class="card-body fw-medium">
                                    <div class="d-flex align-items-center text-dark mb-4">
                                        <i class="ri-music-2-line fs-3"></i>
                                        <h4 class="mb-0 ps-3">Plan <span class="text-primary">{{ $plans[1]['name'] }}</span></h4>
                                    </div>
                                    <p class="fs-6 opacity-50">Lo que obtendrás</p>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">{{ $plans[1]['description'] }}</span>
                                    </div>
                                </div>
                                <div class="card-footer pb-4 pb-sm-0">
                                    <div class="text-dark mb-3"><span class="fs-4 fw-bold">$ {{ $plans[1]['price'] }}</span></div>
                                    <button type="button" class="btn btn-primary w-100" onclick="window.location='/login'">Comprar</button>
                                </div>
                            </div>
                            <div class="card plan__col">
                                <div class="card-body fw-medium">
                                    <div class="d-flex align-items-center text-dark mb-4">
                                        <i class="ri-vip-crown-line fs-3"></i>
                                        <h4 class="mb-0 ps-3">Plan <span class="text-primary">{{ $plans[2]['name'] }}</span></h4>
                                    </div>
                                    <p class="fs-6 opacity-50">Lo que obtendrás</p>
                                    <div class="d-flex mb-3">
                                        <i class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i>
                                        <span class="ps-2">{{ $plans[2]['description'] }}</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-dark mb-3"><span class="fs-4 fw-bold">$ {{ $plans[2]['price'] }}</span></div>
                                    <button type="button" class="btn btn-primary w-100" onclick="window.location='/login'">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: plan -->
                </div>
            </div>
        </div>
        <!-- End:: main section -->

        <!-- Start:: main section [[ Find at scss/framework/section.scss ]] -->
        <div class="main-section" id="contact">
            <div class="container">
                <div class="mx-auto mb-5 text-center col-xl-6 col-lg-8 fs-5">
                    <h2>Ponte en <span class="text-primary">contacto</span></h2>
                    <p>¡Gracias por visitar nuestra página web! Estamos encantados de poder ayudarte en todo lo que
                        necesites. </p>
                </div>
                <div class="mx-auto mb-5 col-xl-8 col-lg-10">
                    <div class="card p-lg-4">
                        <div class="card-body">
                            <form action="#" class="row">
                                <div class="mb-4 col-sm-6">
                                    <label for="f_name" class="form-label fw-medium">Nombre</label>
                                    <input type="text" id="f_name" class="form-control" placeholder="John">
                                </div>
                                <div class="mb-4 col-sm-6">
                                    <label for="l_name" class="form-label fw-medium">Apellido</label>
                                    <input type="text" id="l_name" class="form-control" placeholder="Doe">
                                </div>
                                <div class="mb-4 col-sm-6">
                                    <label for="mail" class="form-label fw-medium">Correo</label>
                                    <input type="text" id="mail" class="form-control" placeholder="johndoe@xzy.com">
                                </div>
                                <div class="mb-4 col-sm-6">
                                    <label for="phone" class="form-label fw-medium">Telefono</label>
                                    <input type="text" id="phone" class="form-control" placeholder="000 1111 222 333">
                                </div>
                                <div class="mb-4 col-12">
                                    <label for="message" class="form-label fw-medium">Mensaje</label>
                                    <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Write here..."></textarea>
                                </div>
                                <div class="text-center col-12">
                                    <button type="button" class="btn btn-primary" style="min-width: 180px;">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mx-auto text-center col-xl-6 col-lg-8 fs-6 text-sm-start">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <span class="mb-2 d-block fw-semi-bold text-dark">Bolivia</span>
                            <p>Universidad Autonoma Gabriel Rene Moreno <br>Santa Cruz - 2023</p>
                        </div>
                        <div class="col-sm-6">
                            <span class="mb-2 d-block fw-semi-bold text-dark">Estudiantes</span>
                            <p>Bianca Romero Guzman<br>Sebastian Padilla Zabala</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: main section -->

        <div class="container">
            <!-- Start:: newsletter [[ Find at scss/base/core.scss ]] -->
            <div class="text-white newsletter">
                <div class="mx-auto text-center col-xl-7 col-lg-10 fs-5">
                    <h2 class="text-white">Únete con<span class="newsletter__title-text"> SoundStream</span></h2>
                    <p>Únete a la revolución musical. Suscríbete a SoundStream y desbloquea un universo de música
                        ilimitada,
                        exclusiva y sin interrupciones. ¡La banda sonora perfecta para tu vida!</p>
                    <a href="{{ route('register') }}" class="mt-3 btn btn-lg btn-light external">Regístrate Ahora</a>
                </div>
            </div>
            <!-- End:: newsletter -->
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('dist/js/plugins.bundle.js') }}"></script>
        <script src="{{ asset('dist/js/scripts.bundle.js') }}"></script>
    </body>


</x-guest-layout>