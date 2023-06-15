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
                            <h3 class="mb-0">Géneros <span class="text-primary">Musicales</span></h3>
                        </div>
                        <div class="row g-4">
                            @foreach ($generos as $genero)
                                <div class="col-xl-3 col-sm-6">
                                    <!-- Start:: cover -->
                                    <div class="cover cover--round">
                                        <a href="#" class="cover__image">
                                            <div class="image-container">
                                                <img src="{{ asset($genero->imagen) }}" alt="{{ $genero->nombre }}">
                                            </div>
                                            <div class="cover__image__content">
                                                <span
                                                    class="mb-1 cover__title fs-6 text-truncate">{{ $genero->nombre }}</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                            @endforeach
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
        .image-container {
            width: 100%;
            /* Establece el ancho máximo */
            height: 0;
            padding-bottom: 100%;
            /* Establece la proporción de aspecto (cuadrado) */
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ajusta la imagen para llenar el contenedor */
        }
    </style>
</x-app-layout>
