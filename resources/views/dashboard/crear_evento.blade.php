<x-app-layout>

<body>

    <!-- Line loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="line_loader"></div>
    
    <!-- Start:: loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="loader">
        <div class="loader">
            <div class="loader__eq mx-auto">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="loader__text mt-2">Loading</span>
        </div>
    </div>
    <!-- End:: loader -->

    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">

        <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(images/banner/event.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="row">
                        <div class="col-xl-7 col-md-10 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Create <span class="text-primary">Event</span></h4>
                                </div>
                                <div class="card-body">
                                    <form action="#" class="row">
                                        <div class="col-12 mb-4">
                                            <div class="dropzone text-center">
                                                <div class="dz-message">
                                                    <i class="ri-upload-cloud-2-line fs-2 text-dark"></i>
                                                    <span class=" d-block fs-6 mt-2">Drag & Drop or click to Upload</span>
                                                    <span class=" d-block form-text mb-4">540x320 (Max: 300KB)</span>
                                                    <button type="button" class="btn btn-light-primary">Upload cover image</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <input type="text" class="form-control" placeholder="Event name">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <textarea name="venue" id="venue" cols="30" rows="4" class="form-control" placeholder="Event venue"></textarea>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <input type="text" class="form-control" placeholder="Organizer email">
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <input type="text" class="form-control" placeholder="Organizer phone">
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <input type="text" class="form-control" placeholder="Event seats">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Write few words about event"></textarea>
                                            <div class="form-text">Describe event in 100 words.</div>
                                        </div>
                                        <div class="col-12 d-flex align-items-center mb-4">
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
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ri-money-dollar-circle-line"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Ticket price">
                                            </div>
                                            <div class="form-text">Please add ticket price if Event is paid</div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
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


    <!-- Scripts -->
    <script src="dist/js/plugins.bundle.js"></script>
    <script src="dist/js/scripts.bundle.js"></script>

</body>

</x-app-layout>