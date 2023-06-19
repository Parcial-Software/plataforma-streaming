<x-guest-layout>
    
    <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
    <header id="main_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a href="index.html" class="brand external">
                    <img src="{{ asset('images/logos/logo.svg') }}" alt="Listen app">
                </a>
                <div class="d-flex align-items-center navbar-ex">
                    <a class="text-white btn btn-gradient-info external" href="{{ route('register') }}">Regístrate</a>
                    <a class="btn btn-dark external ms-3" href="{{ route('login') }}">Iniciar
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

    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">
        <!-- Inicio:: autenticación [[ Encontrar en scss/framework/auth.scss ]] -->
        <div class="py-5 auth">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-xl-5 col-lg-7 col-md-9 col-sm-11">
                        <div class="card">
                            <div class="card-body p-sm-5">
                                <h4>Regístrate en <span class="text-primary">SoundStream</span></h4>
                                <p class="fs-6">Es hora de unirte a SoundStream y disfrutar de una experiencia musical
                                    increíble.</p>
                                <form action="{{ route('registerApi') }}" method="POST" class="mt-5">
                                @csrf
                                <div class="mb-3">
                                        <label for="name" class="form-label fw-medium">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-medium">Correo electrónico</label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label fw-medium">Contraseña</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label fw-medium">Confirmar
                                            Contraseña</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-0 form-check">
                                            <input class="form-check-input" type="checkbox" id="agree">
                                            <label class="form-check-label" for="agree">Acepto <a
                                                    href="#">Términos y Condiciones</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                                    </div>
                                    <p>¿Ya tienes una cuenta? <br><a href="{{ route('login') }}"
                                            class="fw-medium external">Iniciar Sesión</a></p>
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
