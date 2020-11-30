<!-- Start Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="top-header-content">
                    <span>
                        <i class="flaticon-check"></i>
                        Nous vous proposons le meilleur
                    </span>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="top-header-optional">
                    <li>
                        <span><a href="/cogitech/connexion">Se connecter</a> ou <a href="/cogitech/inscription">S'inscrire</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->
<!-- Start Middle Header Area -->
<div class="middle-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="middle-header-logo">
                    <a href="{{ route('accueil') }}">
                        <img src="front/img/logo.png" alt="image">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="middle-header-search">
                   @include('front.partials.search')
                </div>
            </div>

            <div class="col-lg-3">
                <ul class="middle-header-optional">
                    <li>
                        <a href="{{ route('panier') }}"><i class="flaticon-shopping-cart"></i><span>{{ Cart::count() }}</span></a>
                    </li>
                   {{--  <li>$275.00</li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Middle Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('accueil') }}">
                        <img src="{{ asset('front/img/logo-2.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
     <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="navbar-category">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-menu'></i>
                                    Toutes les categories
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/cogitech/serveur" class="nav-link">
                                            <i class="flaticon-desktop-computer"></i>
                                            Serveurs web
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/imprimante" class="nav-link">
                                            <i class="flaticon-stereo"></i>
                                           Imprimantes
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/equipement" class="nav-link">
                                            <i class="flaticon-stereo"></i>
                                            Equipement réseaux
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/telephonieIp" class="nav-link">
                                            <i class="flaticon-stereo"></i>
                                            Telephonies IP
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="flaticon-camera"></i>
                                            Camera de surveillance
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/disque" class="nav-link">
                                            <i class="flaticon-camera"></i>
                                            Disque dur
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="nav-link">
                                            <i class="flaticon-desktop-computer"></i>
                                            Téléphonie IP
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/cogitech/routeur" class="nav-link">
                                            <i class="flaticon-desktop-computer"></i>
                                            Routeur
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/cogitech/cable" class="nav-link">
                                            <i class="flaticon-desktop-computer"></i>
                                            Câble réseaux
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/desktop" class="nav-link">
                                            <i class="flaticon-laptop"></i>
                                            Ordinateur bureau
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/pc" class="nav-link">
                                            <i class="flaticon-laptop"></i>
                                            Ordinateur Pc
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/cogitech/camera" class="nav-link">
                                            <i class="flaticon-trimmer"></i>
                                           Cameras de surveillance
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('accueil') }}" class="nav-link active">
                                ACCUEIL
                            </a>
                        </li>

                        <li class="nav-item megamenu">
                            <a href="/cogitech/produits" class="nav-link">
                                TOUS LES PRODUITS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/cogitech/promotion" class="nav-link">
                                PROMOTION
                            </a>
                        </li>

                            @if(Auth::guest())
                        <li class="nav-item">
                            <a href="/cogitech/connexion" class="nav-link">
                                CONNEXION
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/cogitech/inscription" class="nav-link">S'INSCRIRE</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="text-transform: uppercase;"><i class="fa fa-user"></i>&nbsp; 
                               {{ Auth::User()->name }}
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                   <a onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"class="nav-link" href="{{ route('logout') }}"><i class="lni-exit"></i>Deconnexion
                                       <form id="logout-form" action="{{ route('logout') }}"method="POST" style="display: none;">
                                        {{ csrf_field()}}
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                           <span>
                                Call center:
                                <a href="tel:22522497595">(+225) 22497595</a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                         <span>
                            Service client:
                            <a href="tel:16545676789">(+225) 21-00 00-20</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Navbar Area -->

