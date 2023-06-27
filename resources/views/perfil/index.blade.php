<x-app-layout>

    <body>
        <div id="line_loader"></div>
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

        <main id="page_content">

            <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(images/banner/portada-1.png);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="container under-hero">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <!-- Start:: plan [[ Find at scss/framework/plan.scss ]] -->
                    <div class="plan bg-light">
                        <div class="overflow-hidden card plan__info">
                            <div class="p-0 card-body d-flex flex-column">
                                <div class="p-4">
                                    @if (count($suscriptions) > 0)
                                        <h4 class="mb-3">Tu <span class="text-primary">Plan
                                                {{ $suscriptions[0]['plan']['name'] }}</span></h4>
                                        <p class="fs-6">{{ $suscriptions[0]['plan']['description'] }}</p>
                                        <p class="fs-6"><span class="font-bold text-primary">Precio:
                                            </span>{{ $suscriptions[0]['plan']['price'] }}</p>
                                    @else
                                        <h4 class="mb-3">No tienes ninguna<span
                                                class="text-primary"> Suscripcion</span></h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="plan__data">
                            <div class="px-4 pt-2 mt-4 mb-3 pe-xl-0 pt-sm-0 my-sm-0 w-100">
                                <div class="row g-4">
                                    <div class="col-m-12">
                                        <label for="f_name" class="form-label fw-medium">Nombre</label>
                                        <input type="text" id="f_name" class="form-control"
                                            value={{ $user['name'] }}>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="d_name" class="form-label fw-medium">Email</label>
                                        <input type="text" id="d_email" class="form-control"
                                            value={{ $user['email'] }}>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="location" class="form-label fw-medium">Pais</label>
                                        <input type="text" id="pais" class="form-control"
                                            value={{ $user['pais'] }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: plan -->
                </div>
                <!-- End:: section -->

            </div>
            <!-- End:: under hero -->
        </main>
    </body>

</x-app-layout>
