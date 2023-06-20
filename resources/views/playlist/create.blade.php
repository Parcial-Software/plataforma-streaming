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
                <div class="hero" style="background-image: url(images/banner/portada-5.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="row">
                            <div class="mx-auto col-xl-7 col-md-10">
                                <div class="card">
                                    <div class="pb-0 card-header">
                                        <!-- Start:: mat tabs [[ Find at scss/components/nav.scss ]] -->
                                        <div class="mat-tabs">
                                            <ul class="nav nav-tabs" id="add_music" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link show active" id="album"
                                                        data-bs-toggle="tab" data-bs-target="#album_pane" type="button"
                                                        role="tab" aria-controls="album_pane"
                                                        aria-selected="false">Añadir Playlist</button>

                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End:: mat tabs -->
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="add_music_content">
                                            <div class="tab-pane fade show active" id="album_pane" role="tabpanel" aria-labelledby="album" tabindex="0">
                                                <form method="POST" action="#" enctype="multipart/form-data"
                                                    class="row">
                                                    @csrf

                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Nombre</label>
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Name Album">
                                                    </div>
                                                    
                                                    <div class="text-center card-footer">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="min-width: 140px;">Guardar</button>
                                                        <button class="btn btn-outline-secondary">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
