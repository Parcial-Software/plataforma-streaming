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
                                                <button class="nav-link active" id="music" data-bs-toggle="tab" data-bs-target="#music_pane" type="button" role="tab" aria-controls="music_pane" aria-selected="true">Add Music</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="album" data-bs-toggle="tab" data-bs-target="#album_pane" type="button" role="tab" aria-controls="album_pane" aria-selected="false">Add Album</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End:: mat tabs -->
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="add_music_content">
                                        <div class="tab-pane fade show active" id="music_pane" role="tabpanel" aria-labelledby="music" tabindex="0">
                                            <form action="#" class="row">
                                                <div class="mb-4 col-12">
                                                    <div class="text-center dropzone">
                                                        <div class="dz-message">
                                                            <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                            <span class="mt-2 d-block fs-6">Drag & Drop or click to Upload</span>
                                                            <span class="mb-4 d-block form-text">320x320 (Max: 120KB)</span>
                                                            <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <input type="text" class="form-control" placeholder="Song name">
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <label for="song_file_1" class="form-label">Song file</label>
                                                    <input type="file" id="song_file_1" class="form-control">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Artist">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Composer">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Lyricist">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Music director">
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <select class="form-select" aria-label="Select category">
                                                        <option selected disabled hidden>Select category</option>
                                                        <option value="Remix">Remix</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="DJ">DJ</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <textarea name="lyrics" id="lyrics" cols="30" rows="4" class="form-control" placeholder="Lyrics"></textarea>
                                                </div>
                                                <div class="mb-4 col-12 d-flex align-items-center">
                                                    <div class="form-check me-4">
                                                        <input class="form-check-input" type="radio" name="price" id="free" checked>
                                                        <label class="form-check-label" for="free">Free</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="price" id="paid">
                                                        <label class="form-check-label" for="paid">Paid</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="ri-money-dollar-circle-line"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Song price">
                                                    </div>
                                                    <div class="form-text">Please add ticket price if Event is paid</div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="album_pane" role="tabpanel" aria-labelledby="album" tabindex="0">
                                            <form action="#" class="row">
                                                <div class="mb-4 col-12">
                                                    <div class="text-center dropzone">
                                                        <div class="dz-message">
                                                            <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                            <span class="mt-2 d-block fs-6">Drag & Drop or click to Upload</span>
                                                            <span class="mb-4 d-block form-text">320x320 (Max: 120KB)</span>
                                                            <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <input type="text" class="form-control" placeholder="Album name">
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <input type="text" class="form-control" placeholder="Song name">
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <label for="song_file_2" class="form-label">Song file</label>
                                                    <input type="file" id="song_file_2" class="form-control">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Artist">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Composer">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Lyricist">
                                                </div>
                                                <div class="mb-4 col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Music director">
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <select class="form-select" aria-label="Select category">
                                                        <option selected disabled hidden>Select category</option>
                                                        <option value="Remix">Remix</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="DJ">DJ</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <textarea name="lyrics" id="album_lyrics" cols="30" rows="4" class="form-control" placeholder="Lyrics"></textarea>
                                                </div>
                                                <div class="mb-4 col-12 d-flex align-items-center">
                                                    <div class="form-check me-4">
                                                        <input class="form-check-input" type="radio" name="album_price" id="album_free" checked>
                                                        <label class="form-check-label" for="album_free">Free</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="album_price" id="album_paid">
                                                        <label class="form-check-label" for="album_paid">Paid</label>
                                                    </div>
                                                </div>
                                                <div class="mb-4 col-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="ri-money-dollar-circle-line"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Song price">
                                                    </div>
                                                    <div class="form-text">Please add ticket price if Event is paid</div>
                                                </div>
                                                <div class="col-12">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-light-primary">
                                                        <div class="btn__wrap">
                                                            <i class="ri-add-line"></i>
                                                            <span>Add New</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center card-footer">
                                    <button class="btn btn-primary" style="min-width: 140px;">Add Music</button>
                                    <button class="btn btn-outline-secondary">Cancel</button>
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