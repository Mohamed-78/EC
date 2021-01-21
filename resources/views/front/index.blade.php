@extends('front.layouts.defaults',['title' => 'ACCUEIL'])

@section('content')

<!-- Start Main Slider Area -->
<div class="main-slider-with-categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <ul class="slider-categories">
                    <li>
                        <a href="/cogitech/serveur" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Serveur web
                        </a>
                    </li>

                    <li>
                        <a href="/cogitech/imprimante" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                           Imprimante
                        </a>
                    </li>

                    <li>
                        <a href="/cogitech/equipement" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Equipements réseaux
                        </a>
                    </li>

                    <li>
                        <a href="/cogitech/telephonieIp" class="nav-link">
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

                    <li>
                        <a href="/cogitech/disque" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Disque dur
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
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="home-slides-two owl-carousel owl-theme">
                    <div class="main-slider-item-box">
                        <div class="main-slider-content">
                            <b>Les meilleurs prix c'est ici!</b>
                            <h1>Obtenez les meilleures offres sur nos routeurs</h1>
                            <p>Nous vous proposons les meilleurs produits à des prix reduits</p>

                            <div class="slider-btn">
                                <a href="/cogitech/produits" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Voir plus
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-slider-item-box item-two">
                        <div class="main-slider-content">
                            <b>Les meilleurs prix c'est ici!</b>
                            <h1>Caméra CCTV nouveautés</h1>
                            <p>Nous vous proposons les meilleurs produits à des prix reduits</p>

                            <div class="slider-btn">
                                <a href="/cogitech/produits" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Voir plus
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-slider-item-box item-three">
                        <div class="main-slider-content">
                            <b>Les meilleurs prix c'est ici!</b>
                            <h1>Caméra de haute résolution</h1>
                            <p>Nous vous proposons les meilleurs produits à des prix reduits</p>

                            <div class="slider-btn">
                                <a href="/cogitech/produits" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                  Voir plus
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Slider Area -->

<!-- Start Support Area -->
<section class="support-area ptb-50">
    <div class="container">
        <div class="support-inner-box">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-free-shipping"></i>
                        </div>

                        <div class="support-content">
                            <h3>Livraison rapide</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-return"></i>
                        </div>

                        <div class="support-content">
                            <h3>Produits garantis</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-security"></i>
                        </div>

                        <div class="support-content">
                            <h3>Paiement fiable</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>

                        <div class="support-content">
                            <h3>24/7 Call center</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Support Area -->

<!-- Start Special Products Area -->
<section class="special-products-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="special-products-inner">
                    <div class="inner-content">
                        <span style="color: white;">Nouveauté!!!</span>
                        <h3 style="color: white;">Commandez maintenant</h3>
                        <p style="color: white;">Le stock est limité</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Serveurs web</h2>
                </div>

                <div class="row">
                    @foreach($produit as $prod)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="/cogitech/details/produits/{{ $prod->id }}"><img src="{{URL::asset('admin/media/'.$prod->photo)}}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                        <a onclick="document.getElementById('myForm').submit()">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cogitech/details/produits/{{ $prod->id }}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="cogitech/details/produits/{{ $prod->id }}">{{ $prod->titre }}</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>{{number_format($prod->prix), 0, ',', ' '}}
                                    @if($prod->prix and !is_null($prod->prix))
                                    FCFA
                                    @else
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Special Products Area -->

<!-- Start Offer Pc Area -->
<section class="offer-products-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Nos offres spéciales</h2>
        </div>
        @if($promo->count()>0)
         <div class="row">
            @foreach($promo as $prod)
            <div class="col-lg-4 col-sm-6">
                <div class="single-special-products">
                    <div class="special-products-image">
                        <a href="/cogitech/details/promo/{{ $prod->id }}"><img src="{{URL::asset('admin/media/'.$prod->photo)}}" alt="image"></a>
                        <div class="tag">{{ $prod->reduction }}</div>
                        <ul class="special-action">
                            <li>
                                <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                    <a onclick="document.getElementById('myForm').submit()">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('produit.like') }}" id="form-js">
                                <input type="hidden" value="{{ $prod->id }}" id="post-id-js">
                                <button type="submit"><i class="flaticon-heart"></i><span id="count-js">@if(isset($prod->likes))
                                {{ $prod->likes->count() }}
                                @else
                                0
                                @endif
                                </span></button>
                                </form>
                            </li>
                            <li>
                                <a href="/cogitech/details/promo/{{ $prod->id }}"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="special-products-content">
                        <h3>
                            <a href="/cogitech/details/promo/{{ $prod->id }}">{{ $prod->titre }}</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>{{number_format($prod->newPrice), 0, ',', ' '}}
                            @if($prod->newPrice and !is_null($prod->newPrice))
                            FCFA
                            @else
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
         <h6 style="color: red;text-align: center;">Aucun article disponible</h6>
        @endif
    </div>
</section>
<!-- End Offer Pc Area -->

<!-- Start Special Tv Area -->
<section class="special-products-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="special-products-inner inner-two">
                    <div class="inner-content">
                        <span style="color: white;">Nouveauté!!!</span>
                        <h3 style="color: white;">Commandez maintenant</h3>
                        <p style="color: white;">Le stock est limité</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Routeurs</h2>
                </div>
                @if($rack->count()>0)
                <div class="row">
                    @foreach($rack as $prod)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="/cogitech/details/produits/{{ $prod->id }}"><img src="{{URL::asset('admin/media/'.$prod->photo)}}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                            <a onclick="document.getElementById('myForm').submit()">
                                                <i class="flaticon-shopping-cart"></i>
                                            </a>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cogitech/details/produits/{{ $prod->id }}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="cogitech/details/produits/{{ $prod->id }}">{{ $prod->titre }}</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>{{number_format($prod->prix), 0, ',', ' '}}
                                    @if($prod->prix and !is_null($prod->prix))
                                    FCFA
                                    @else
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <h6 style="color: red;text-align: center;">Aucun article disponible</h6>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End Special Tv Area -->

<!-- Start Special Appareils snores Area -->
<section class="special-products-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="special-products-inner">
                    <div class="inner-content">
                        <span style="color: white;">Nouveauté!!!</span>
                        <h3 style="color: white;">Commandez maintenant</h3>
                        <p style="color: white;">Le stock est limité</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Cameras de surveillance</h2>
                </div>
                @if($camera->count()>0)
                <div class="row">
                    @foreach($camera as $prod)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="/cogitech/details/produits/{{ $prod->id }}"><img src="{{URL::asset('admin/media/'.$prod->photo)}}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                            <a onclick="document.getElementById('myForm').submit()">
                                                <i class="flaticon-shopping-cart"></i>
                                            </a>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cogitech/details/produits/{{ $prod->id }}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="cogitech/details/produits/{{ $prod->id }}">{{ $prod->titre }}</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>{{number_format($prod->prix), 0, ',', ' '}}
                                    @if($prod->prix and !is_null($prod->prix))
                                    FCFA
                                    @else
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <h6 style="color: red;text-align: center;">Aucun article disponible</h6>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End Special Appareils snores Area -->

<!-- Start Collection Area -->
<section class="collection-area">
    <div class="container">
        <div class="collection-inner-box">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="collection-image">
                        <img src="{{ asset('front/img/collection/collection-1.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="collection-content">
                        <span>Profitez des meilleurs equiments</span>
                        <p>Ensemble numerisons le monde</p>
                        <h3>Cogitech</h3>

                        <div class="collection-btn">
                            <a href="/cogitech/promotion'" class="default-btn">
                                <i class="flaticon-shopping-cart"></i>
                                Voir plus
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="collection-image">
                        <img src="front/img/collection/collection-2.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Collection Area -->

<!-- Start Offer Products Area -->
<section class="offer-products-area pt-50 pb-20">
    <div class="container">
        <div class="section-title">
            <h2>Imprimantes</h2>
        </div>
        @if($routeur->count()>0)
        <div class="row">
            @foreach($routeur as $prod)
            <div class="col-lg-4 col-sm-6">
                <div class="single-special-products">
                    <div class="special-products-image">
                        <a href="/cogitech/details/produits/{{ $prod->id }}"><img src="{{URL::asset('admin/media/'.$prod->photo)}}" alt="image"></a>
                        <div class="tag">New</div>
                        <ul class="special-action">
                            <li>
                                <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                    <a onclick="document.getElementById('myForm').submit()">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </form>
                            </li>
                            <li>
                                <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="cogitech/details/produits/{{ $prod->id }}"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="special-products-content">
                        <h3>
                            <a href="cogitech/details/produits/{{ $prod->id }}">{{ $prod->titre }}</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>{{number_format($prod->prix), 0, ',', ' '}}
                            @if($prod->prix and !is_null($prod->prix))
                            FCFA
                            @else
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
         <h6 style="color: red;text-align: center;">Aucun article disponible</h6>
        @endif
    </div>
</section>
<!-- End Offer Products Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-50">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-item">
                <a href="#">
                    <img src="front/img/partner/partner-1.png" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="front/img/partner/partner-2.png" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="front/img/partner/partner-3.png" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="front/img/partner/partner-4.png" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="front/img/partner/partner-5.png" alt="image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

@endsection