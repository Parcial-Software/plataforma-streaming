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
                                                    <button class="nav-link" id="album" data-bs-toggle="tab"
                                                        data-bs-target="#album_pane" type="button" role="tab"
                                                        aria-controls="album_pane" aria-selected="false">Añadir
                                                        Album</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a href="{{ route('song.index') }}">
                                                        <button class="nav-link active" id="music"
                                                            data-bs-toggle="tab" data-bs-target="#music_pane"
                                                            type="button" role="tab" aria-controls="music_pane"
                                                            aria-selected="true">Añadir Musica</button>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- End:: mat tabs -->
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="add_music_content">
                                            <div class="tab-pane fade show active" id="music_pane" role="tabpanel"
                                                aria-labelledby="music" tabindex="0">
                                                <form action="{{ route('song.store') }}" method="POST" class="row"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Nombre</label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" placeholder="nombre">
                                                    </div>
                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Archivo</label>
                                                        <input type="file" id="file" name="file"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Imagen</label>
                                                        <input type="file" id="image" name="image"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-4 col-sm-6">
                                                        <input type="text" id="artist" name="artist"
                                                            class="form-control" placeholder="Artista">
                                                    </div>
                                                    <div class="mb-4 col-sm-6">
                                                        <input type="text" name="fecha" class="form-control"
                                                            placeholder="Fecha">
                                                    </div>
                                                    <div class="mb-4 col-sm-6">
                                                        <select class="form-select" aria-label="Select category"
                                                            name="genderId" id="genderId">
                                                            <option selected disabled hidden>Selecciona Género</option>
                                                            @foreach ($genders as $gender)
                                                                <option value="{{ $gender['id'] }}">
                                                                    {{ $gender['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-sm-6">
                                                        <select class="form-select" aria-label="Select category"
                                                            name="albumId" id="albumId">
                                                            <option selected disabled hidden>Selecciona Album</option>
                                                            @foreach ($albums as $album)
                                                                <option value="{{ $album['id'] }}">
                                                                    {{ $album['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-12">
                                                        <textarea name="lyrics" id="lyrics" cols="30" rows="4" class="form-control" placeholder="Letra"></textarea>
                                                    </div>
                                                    <div class="text-center card-footer">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="min-width: 140px;">Guardar</button>
                                                        <button class="btn btn-outline-secondary">Cancel</button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="album_pane" role="tabpanel"
                                                aria-labelledby="album" tabindex="0">
                                                <form method="POST" action="{{ route('album.store') }}"
                                                    enctype="multipart/form-data" class="row">
                                                    @csrf

                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Nombre</label>
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Name Album">
                                                    </div>
                                                    <div class="mb-4 col-12">
                                                        <label for="song_file_1" class="form-label">Imagen</label>
                                                        <input type="file" id="image" name="image"
                                                            class="form-control">
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
