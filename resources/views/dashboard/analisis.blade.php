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
                <div class="hero" style="background-image: url(images/banner/portada-7.png);"></div>

                <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
                <div class="container under-hero">

                    <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                    <div class="section">
                        <div class="mb-5 fs-6">
                            <h3>Hi <span class="text-primary">Admin</span>, Welcome to the Listen App</h3>
                            <p>Select your music to listen & download free and premium music.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="mb-0">Top 5 canciones favoritas del mundo</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach($songs as $song)
                                            <li class="px-0 py-0 border-0 list-group-item">
                                                <p class="mb-1 fs-4 fw-semi-bold">{{$song->totalFavorites}}</p>
                                                <p class="mb-2 fw-medium">{{$song->songName}}</p>
                                                <div class="progress" style="height: .25rem">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$song->totalFavorites}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="row h-100">
                                    <div class="mt-4 col-sm-8 mt-sm-0">
                                        <div class="card h-100">
                                            <div class="card-header">
                                                <h5>Ganancias x Plan <i class="ri-currency-fill fs-5"></i></h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                                    <canvas id="plans"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-sm-4 mt-sm-0">
                                        <div class="card h-80 bg-warning">
                                            <div class="card-header">
                                                <h5 class="text-black">Ganancias Totales</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-black d-flex align-items-center">
                                                    <i class="ri-currency-fill fs-5"></i>
                                                    <p class="fw-medium ps-2">{{$earnings[0]->totalGanancia}} $</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pais Subscriptions</h5>
                                    </div>
                                    <div class="card-body">
                                        <div style="height: 400px">
                                            <canvas id="paises"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="mb-0">Generos mas escuchados</h5>
                                    </div>
                                    <div style="height: 400px">
                                        <canvas id="genders"></canvas>
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        var paises = [];
        var cant_sus = [];
        var genders = [];
        var total_reproduction_genders = [];
        var earnings_by_plan = [];
        var plans = [];
        var totalFavorite = [];
        var songName = [];

        ////Grafica Planes
        $(document).ready(function() {
            $.ajax({
                url: '/amountSubscriptionsByCountry/ajax',
                method: 'POST',
                data: {
                    id: 1,
                    _token: $('input[name="_token"]').val()
                }
            }).done(function(res) {
                try {
                    var arreglo = res;
                    if (Array.isArray(arreglo)) {
                        for (var x = 0; x < arreglo.length; x++) {
                            paises.push(arreglo[x].pais[0]);
                            cant_sus.push(arreglo[x].cantidad);
                        }
                        generarGrafica2();
                    } else {
                        console.error('La respuesta no es un arreglo válido:', arreglo);
                    }
                } catch (error) {
                    console.error('Error al procesar la respuesta:', error);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud:', textStatus, errorThrown);
            });
        });

        function generarGrafica2() {
            const ctx = document.getElementById('paises').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: paises,
                    datasets: [{
                        label: 'Cantidad de Suscripciones por País',
                        data: cant_sus,
                        backgroundColor: [
                            'rgba(135, 206, 250, 0.2)',
                            'rgba(50, 205, 50, 0.2)',
                            'rgba(255, 165, 0, 0.2)',
                            'rgba(240, 128, 128, 0.2)',
                            'rgba(218, 112, 214, 0.2)',
                            'rgba(255, 215, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgba(135, 206, 250, 1)',
                            'rgba(50, 205, 50, 1)',
                            'rgba(255, 165, 0, 1)',
                            'rgba(240, 128, 128, 1)',
                            'rgba(218, 112, 214, 1)',
                            'rgba(255, 215, 0, 1)'
                        ],
                        hoverOffset: 4,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        $(document).ready(function() {
            $.ajax({
                url: '/mostListenedGenders/ajax',
                method: 'POST',
                data: {
                    id: 1,
                    _token: $('input[name="_token"]').val()
                }
            }).done(function(res) {
                try {
                    var arreglo = res;
                    if (Array.isArray(arreglo)) {
                        for (var x = 0; x < arreglo.length; x++) {
                            genders.push(arreglo[x].gender);
                            total_reproduction_genders.push(arreglo[x].totalReproductions);
                        }
                        generarGrafica3();
                    } else {
                        console.error('La respuesta no es un arreglo válido:', arreglo);
                    }
                } catch (error) {
                    console.error('Error al procesar la respuesta:', error);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud:', textStatus, errorThrown);
            });
        });

        function generarGrafica3() {
            const ctx = document.getElementById('genders').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: genders,
                    datasets: [{
                        label: 'Datased',
                        data: total_reproduction_genders,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(153, 102, 255)',
                            'rgb(255, 159, 64)',
                            'rgb(220, 20, 60)',
                            'rgb(0, 128, 0)',
                            'rgb(70, 130, 180)',
                            'rgb(255, 0, 0)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(153, 102, 255)',
                            'rgb(255, 159, 64)',
                            'rgb(220, 20, 60)',
                            'rgb(0, 128, 0)',
                            'rgb(70, 130, 180)',
                            'rgb(255, 0, 0)'
                        ],
                        hoverOffset: 4,
                        borderWidth: 1
                    }]
                }
            });
        }

        $(document).ready(function() {
            $.ajax({
                url: '/earningsByPlanType/ajax',
                method: 'POST',
                data: {
                    id: 1,
                    _token: $('input[name="_token"]').val()
                }
            }).done(function(res) {
                try {
                    var arreglo = res;
                    if (Array.isArray(arreglo)) {
                        for (var x = 0; x < arreglo.length; x++) {
                            plans.push(arreglo[x].plan);
                            earnings_by_plan.push(arreglo[x].ganancia);
                        }
                        generarGrafica4();
                    } else {
                        console.error('La respuesta no es un arreglo válido:', arreglo);
                    }
                } catch (error) {
                    console.error('Error al procesar la respuesta:', error);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud:', textStatus, errorThrown);
            });
        });

        function generarGrafica4() {
            const ctx = document.getElementById('plans').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: plans,
                    datasets: [{
                        label: 'Ingresos $',
                        data: earnings_by_plan,
                        backgroundColor: [
                            'rgba(255, 165, 0, 0.2)',
                            'rgba(240, 128, 128, 0.2)',
                            'rgba(218, 112, 214, 0.2)',
                            'rgba(255, 215, 0, 0.2)',
                            'rgba(135, 206, 250, 0.2)',
                            'rgba(50, 205, 50, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 165, 0, 1)',
                            'rgba(240, 128, 128, 1)',
                            'rgba(218, 112, 214, 1)',
                            'rgba(255, 215, 0, 1)',
                            'rgba(135, 206, 250, 1)',
                            'rgba(50, 205, 50, 1)'
                        ],
                        hoverOffset: 4,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

    </script>

</x-app-layout>