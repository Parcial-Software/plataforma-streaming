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
            <div class="hero" style="background-image: url(images/banner/portada-6.png);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="container under-hero">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="row">
                        <div class="mx-auto col-xl-7 col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Create <span class="text-primary">Event</span></h4>
                                </div>
                                <div class="card-body">
                                    <form action="#" class="row">
                                        <div class="mb-4 col-12">
                                            <div class="text-center dropzone">
                                                <div class="dz-message">
                                                    <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                    <span class="mt-2 d-block fs-6">Drag & Drop or click to Upload</span>
                                                    <span class="mb-4 d-block form-text">540x320 (Max: 300KB)</span>
                                                    <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 col-12">
                                            <input type="text" class="form-control" placeholder="Event name">
                                        </div>
                                        <div class="mb-4 col-12">
                                            <textarea name="venue" id="venue" cols="30" rows="4" class="form-control" placeholder="Event venue"></textarea>
                                        </div>
                                        <div class="mb-4 col-sm-6">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="mb-4 col-sm-6">
                                            <input type="text" class="form-control" placeholder="Organizer email">
                                        </div>
                                        <div class="mb-4 col-sm-6">
                                            <input type="text" class="form-control" placeholder="Organizer phone">
                                        </div>
                                        <div class="mb-4 col-sm-6">
                                            <input type="text" class="form-control" placeholder="Event seats">
                                        </div>
                                        <div class="mb-4 col-12">
                                            <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Write few words about event"></textarea>
                                            <div class="form-text">Describe event in 100 words.</div>
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
                                            <div class="mb-3 input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ri-money-dollar-circle-line"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Ticket price">
                                            </div>
                                            <div class="form-text">Please add ticket price if Event is paid</div>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center card-footer">
                                    <button class="btn btn-primary" style="min-width: 140px;">Create Event</button>
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