  <!-- Start:: sidebar [[ Find at scss/framework/sidebar.scss ]] -->
  <aside id="sidebar">
      <div class="sidebar-head d-flex align-items-center justify-content-between">
          <a href="index.html" class="brand external">
              <img src="{{asset('dist/images/logos/logo.svg')}}" alt="Listen app">
          </a>

          <a href="javascript:void(0);" role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
              <div class="d-none d-lg-block">
                  <i class="ri-menu-3-line sidebar-menu-1"></i>
                  <i class="ri-menu-line sidebar-menu-2"></i>
              </div>
              <i class="ri-menu-fold-line d-lg-none"></i>
          </a>
      </div>

      <div class="sidebar-body" data-scroll="true">
          <nav class="p-0 navbar d-block">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="{{ route('home.index') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-home-4-line fs-5"></i>
                          <span class="ps-3">Home</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('gender.index') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-disc-line fs-5"></i>
                          <span class="ps-3">Genres</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('song.index2') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-music-2-line fs-5"></i>
                          <span class="ps-3">Canciones</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href=" {{ route('album.index')}}" class="nav-link d-flex align-items-center">
                          <i class="ri-album-line fs-5"></i>
                          <span class="ps-3">Albums</span>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('playlist.index')}}" class="nav-link d-flex align-items-center">
                        <i class="ri-mic-line fs-5"></i>
                        <span class="ps-3">Playlist</span>
                    </a>
                </li>
                  
                  <li class="nav-item nav-item--head">
                      <span class="nav-item--head__text">Music</span>
                      <span class="nav-item--head__dots">...</span>
                  </li>
                  @if( session('roleId') == '3')
                  <li class="nav-item">
                      <a href="{{ route('dashboard.analisis') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-pie-chart-line fs-5"></i>
                          <span class="ps-3">Analytics</span>
                      </a>
                  </li>
                  @endif
                  <li class="nav-item">
                      <a href="{{ route('favorito.favoritos') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-heart-line fs-5"></i>
                          <span class="ps-3">Favorites</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('history.history') }}" class="nav-link d-flex align-items-center">
                          <i class="ri-history-line fs-5"></i>
                          <span class="ps-3">History</span>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
      <div class="sidebar-foot">
          <a href="{{ route('song.index') }}" class="btn btn-primary d-flex">
              <div class="btn__wrap">
                  <i class="ri-music-fill"></i>
                  <span>Añadir Musica</span>
              </div>
          </a>
      </div>
  </aside>
  <!-- End:: sidebar -->