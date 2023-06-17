<x-guest-layout>

        <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
        <header id="main_header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a href="index.html" class="brand external">
                        <img src="{{ asset('images/logos/logo.svg') }}" alt="Listen app">
                    </a>
                    <div class="d-flex align-items-center navbar-ex">
                        <a class="text-white btn btn-gradient-info external"  href="{{ route('register') }}">Regístrate</a>
                        <a class="btn btn-dark external ms-3" href="{{route('login')}}">Iniciar
                            Sesión</a>
    
                        <button class="navbar-toggler ms-3 ms-sm-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-3-fill"></i>
                        </button>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End:: header -->
        <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
        <div id="wrapper">
            <!-- Inicio:: autenticación [[ Encontrar en scss/framework/auth.scss ]] -->
            <div class="py-5 auth">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xl-5 col-lg-7 col-md-9 col-sm-11">
                            <div class="card">
                                <div class="card-body p-sm-5">
                                    <h4>Iniciar sesión en <span class="text-primary">SoundStream</span></h4>
                                    <p class="fs-6">¡Bienvenido de nuevo! Inicia sesión con tus datos que ingresaste durante el registro</p>
                                    <form action=" {{ route('loginApi')}} " method="POST" class="mt-5">
                                    @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label fw-medium">Correo</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="mb-2">
                                            <label for="password" class="form-label fw-medium">Contraseña</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="mb-4 text-end">
                                            <a href="#" class="link-primary fw-medium">¿Olvidaste tu contraseña?</a>
                                        </div>
                                        <div class="mb-5">
                                            <button class="btn btn-primary w-100" type="submit">Iniciar Sesion</button>
                                        </div>
                                        <p>¿Todavía no estás registrado? <br><a href="register.html" class="fw-medium external">Registrarse</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin:: autenticación -->
        </div>
        <!-- End:: wrapper -->
</x-guest-layout>
