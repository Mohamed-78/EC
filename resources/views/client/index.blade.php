@extends('front.layouts.defaults',['title' => 'ACCUEIL'])

@section('content')

<!-- Start Main Slider Area -->
<div class="main-slider-with-categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <ul class="slider-categories">
                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Serveur web
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Rack
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Equipements réseaux
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Téléphonie IP
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Routeur
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Câble réseaux
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="flaticon-desktop-computer"></i>
                            Disque dur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="flaticon-laptop"></i>
                            Ordinateur bureau
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="flaticon-laptop"></i>
                            Ordinateur Pc
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="flaticon-trimmer"></i>
                            Autres accessoires
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="home-slides-two owl-carousel owl-theme">
                    <div class="main-slider-item-box">
                        <div class="main-slider-content">
                            <b>Les meilleurs prix c'est ici!</b>
                            <h1>Obtenez les meilleures offres sur nos écouteurs</h1>
                            <p>Nous vous proposons les meilleurs produits à des prix reduits</p>

                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Voir plus
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-slider-item-box item-two">
                        <div class="main-slider-content">
                            <b>Popular in 2020</b>
                            <h1>New Arrivals CCTV Camera</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Shop Now
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-slider-item-box item-three">
                        <div class="main-slider-content">
                            <b>Big Sale Offer</b>
                            <h1>High-Quality Product Camera</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Shop Now
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
                        <span>Nouveauté!!!</span>
                        <h3>Commandez maintenant</h3>
                        <p>Le stock est limité</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Ordinateurs portables</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/pc_1.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">Hp Core i3</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>350 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/mac.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">Mac os core i5</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>1 500 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/pav.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="#">Hp pavillon core i7</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>850 000 FCFA</span>
                            </div>
                        </div>
                    </div>
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

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="products-details.html"><img src="front/img/offer-products/offer-products-1.png" alt="image"></a>
                        <div class="tag">-20%</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Gadget</span>
                        <h3>
                            <a href="products-details.html">Smartphone</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">90 000 FCFA</span>
                            <span class="old-price">150 000 FCFA</span>
                        </div>
                        <ul class="rating">
                            <li>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="products-details.html"><img src="front/img/offer-products/offer-products-2.png" alt="image"></a>
                        <div class="tag">-50%</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Gadget</span>
                        <h3>
                            <a href="products-details.html"> Casque Bluetooth</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">23 000 FCFA</span>
                            <span class="old-price">37 000 FCFA</span>
                        </div>
                        <ul class="rating">
                            <li>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="products-details.html"><img src="front/img/offer-products/offer-products-3.png" alt="image"></a>
                        <div class="tag">-30%</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Gadget</span>
                        <h3>
                            <a href="products-details.html">Smart TV</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">170 000 FCFA</span>
                            <span class="old-price">210 000 FCFA</span>
                        </div>
                        <ul class="rating">
                            <li>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Offer Pc Area -->

<!-- Start Special Tv Area -->
<section class="special-products-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="special-products-inner">
                    <div class="inner-content">
                        <span>Nouveauté!!!</span>
                        <h3>Commandez maintenant</h3>
                        <p>Le stock est limité</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Télévison</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/tv_1.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">Ecran Smart 25 pouces</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>80 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/tv_2.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">Smart TV incurvé</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>350 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/tv_3.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="#">Ecran incurvé 45 pouces</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>275 000 FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <span>Nouveauté!!!</span>
                        <h3>Commandez maintenant</h3>
                        <p>Le stock est limité</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Appareils snores</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/s_1.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">JBL bluetooth</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>23 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/s_2.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="products-details.html">JBL lite</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>12 000 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="single-special-products">
                            <div class="special-products-image">
                                <a href="products-details.html"><img src="{{ asset('front/img/special-products/s_3.jpg') }}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="special-action">
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="special-products-content">
                                <h3>
                                    <a href="#">Sono smarting</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>120 000 FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <img src="front/img/collection/collection-1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="collection-content">
                        <span>Tu veux te mettre frais?</span>
                        <p>une adresse</p>
                        <h3>Cogitech</h3>

                        <div class="collection-btn">
                            <a href="#" class="default-btn">
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
            <h2>Offre weekend</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="products-details.html"><img src="front/img/offer-products/large-offer-products.png" alt="image"></a>
                        <div class="tag">-50%</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Gadget</span>
                        <h3>
                            <a href="products-details.html">Casque Bluetooth</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">25 000 FCFA</span>
                            <span class="old-price">45 000 FCFA</span>
                        </div>
                        <ul class="rating">
                            <li>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>

                        <div class="offer-soon-content">
                            <div id="timer" class="flex-wrap d-flex justify-content-center">
                                <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-offer-products-box">
                            <div class="offer-products-image">
                                <a href="products-details.html"><img src="front/img/offer-products/offer-products-4.jpg" alt="image"></a>
                                <div class="tag">-50%</div>

                                <ul class="offer-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="offer-products-content">
                                <span>Gadget</span>
                                <h3>
                                    <a href="products-details.html">Infinix 4</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">150 000 FCFA</span>
                                    <span class="old-price">200 000 FCFA</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-offer-products-box">
                            <div class="offer-products-image">
                                <a href="products-details.html"><img src="front/img/offer-products/offer-products-5.jpg" alt="image"></a>
                                <div class="tag">-40%</div>

                                <ul class="offer-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="offer-products-content">
                                <span>Gadget</span>
                                <h3><a href="products-details.html">Tv smart</a></h3>
                                <div class="price">
                                    <span class="new-price">75 000 FCFA</span>
                                    <span class="old-price">90 000 FCFA</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="single-offer-products-box">
                            <div class="offer-products-image">
                                <a href="products-details.html"><img src="front/img/offer-products/offer-products-6.jpg" alt="image"></a>
                                <div class="tag">-20%</div>

                                <ul class="offer-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="offer-products-content">
                                <span>Gadget</span>
                                <h3>
                                    <a href="#">Climatiseur</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">75 000 FCFA</span>
                                    <span class="old-price">100 000 FCFA</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="offer-overview">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="offer-image">
                                        <img src="front/img/offer-products/offer-products-7.png" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="offer-content">
                                        <h3>Offre spéciale de réduction</h3>
                                        <span>150 000 FCFA</span>

                                        <div class="offer-btn">
                                            <a href="#" class="default-btn">
                                                <i class="flaticon-shopping-cart"></i>
                                                Commandez-maintenant
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
        </div>
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