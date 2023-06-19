 <!-- Start:: player [[ Find at scss/framework/player.scss ]] -->
 <div id="player">
     <div class="container">
         <div class="player-container">
             <div class="player-progress">
                 <progress class="amplitude-buffered-progress player-progress__bar" value="0"></progress>
                 <progress class="amplitude-song-played-progress player-progress__bar"></progress>
                 <input type="range" class="amplitude-song-slider player-progress__slider" aria-label="Progress slider">
             </div>

             <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
             <div class="cover d-flex align-items-center">
                 <div class="cover__image">
                     <img data-amplitude-song-info="cover_art_url" src="images/cover/small/1.jpg" alt="">
                 </div>
                 <div class="cover__content ps-3 d-none d-sm-block">
                     <a href="song-details.html" class="cover__title text-truncate" data-amplitude-song-info="name"></a>
                     <a href="artist-details.html" class="cover__subtitle text-truncate" data-amplitude-song-info="artist"></a>
                 </div>
             </div>
             <!-- End:: cover -->

             <div class="player-control">
                 <button type="button" class="amplitude-repeat btn btn-icon me-4 d-none d-md-block" aria-label="Repeat">
                     <i class="ri-repeat-2-fill fs-5"></i>
                 </button>
                 <button type="button" class="amplitude-prev btn btn-icon" aria-label="Backward">
                     <i class="ri-skip-back-mini-fill"></i>
                 </button>
                 <button type="button" class="amplitude-play-pause btn btn-icon btn-default rounded-pill" aria-label="Play pause">
                     <i class="ri-play-fill icon-play"></i>
                     <i class="ri-pause-fill icon-pause"></i>
                 </button>
                 <button type="button" class="amplitude-next btn btn-icon" aria-label="Forward">
                     <i class="ri-skip-forward-mini-fill"></i>
                 </button>
                 <button type="button" class="amplitude-shuffle amplitude-shuffle-off btn btn-icon ms-4 d-none d-md-block" aria-label="Shuffle">
                     <i class="ri-shuffle-fill fs-5"></i>
                 </button>
             </div>

             <div class="player-info">
                 <div class="me-4 d-none d-xl-block">
                     <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span> /
                     <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                 </div>
                 <div class="player-volume dropdown d-none d-md-block">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Volume" aria-expanded="false">
                         <i class="ri-volume-mute-fill fs-5 d-none"></i>
                         <i class="ri-volume-down-fill fs-5"></i>
                         <i class="ri-volume-up-fill fs-5 d-none"></i>
                     </button>
                     <div class="dropdown-menu prevent-click">
                         <input type="range" class="amplitude-volume-slider" value="50" min="0" max="100" aria-label="Volume slider">
                     </div>
                 </div>
                 <div class="dropstart d-none d-md-block">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" aria-label="Song options" aria-expanded="false">
                         <i class="ri-more-2-fill fs-5"></i>
                     </button>
                     <ul class="dropdown-menu dropdown-menu-sm" id="player_options">
                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                         <li>
                             <button class="px-3 py-1 bg-#92929F rounded-sm flex items-start min-w-32">
                                 <span class="font-semibold text-start">Add to playlist</span>
                                 <span>
                                     <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                         <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                     </svg>
                                 </span>
                             </button>
                             <ul class="bg-black transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-in-out origin-top-right min-w-32">
                                 <li><a class="dropdown-item" href="#" download>Playlist1</a></li>
                                 <li><a class="dropdown-item" href="#" download>Playlist2</a></li>
                                 <li><a class="dropdown-item" href="#" download>Playlist3</a></li>
                             </ul>
                         </li>
                         <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                         <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                         <li class="dropdown-divider"></li>
                         <li><a class="dropdown-item" href="song-details.html">View details</a></li>
                     </ul>
                 </div>

                 <!-- Start:: playlist [[ Find at scss/framework/playlist.scss ]] -->
                 <div class="playlist dropstart me-3">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Playlist" aria-expanded="false">
                         <i class="ri-play-list-fill fs-5"></i>
                     </button>
                     <div class="dropdown-menu playlist__dropdown">
                         <div class="playlist__head d-flex align-items-center justify-content-between">
                             <h6 class="mb-0">Next Lineup</h6>
                             <a href="javascript:void(0);" role="button" id="clear_playlist" class="btn btn-link">Clear</a>
                         </div>
                         <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                         <div id="playlist" class="list playlist__body" data-scroll="true">
                             <div class="col-sm-8 col-10 mx-auto mt-5 text-center">
                                 <i class="ri-music-2-line mb-3"></i>
                                 <p>No songs, album or playlist are added on lineup.</p>
                             </div>
                         </div>
                         <!-- End:: list -->
                     </div>
                 </div>
                 <!-- End:: playlist -->
             </div>
         </div>
     </div>
     <style>
         li>ul {
             transform: translatex(100%) scale(0)
         }

         li:hover>ul {
             transform: translatex(101%) scale(1)
         }

         li>button svg {
             transform: rotate(-90deg)
         }

         li:hover>button svg {
             transform: rotate(-270deg)
         }

         .group:hover .group-hover\:scale-100 {
             transform: scale(1)
         }

         .group:hover .group-hover\:-rotate-180 {
             transform: rotate(180deg)
         }

         .scale-0 {
             transform: scale(0)
         }

         .min-w-32 {
             min-width: 8rem
         }
     </style>
     <script src="https://cdn.tailwindcss.com"></script>
 </div>
 <!-- End:: player -->