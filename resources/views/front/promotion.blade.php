@extends('front.layouts.default',['title' => 'PROMOTION'])

@section('content')

<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: white;">PROMOTIONS</h2>
            <ul>
                <li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
                <li style="color: white;">Nos offres promotionnelles</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Offer Products Area -->
<section class="offer-products-area pt-50 pb-20">
    <div class="container">
        <div class="section-title">
            <h2>Offre promotionnelle</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="#"><img src="{{ asset('front/img/offer-products/large-offer-products.png') }}" alt="image"></a>
                        <div class="tag">-50%</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Gadget</span>
                        <h3>
                            <a href="products-details.html">Bluetooth Headphone</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">$150.00</span>
                            <span class="old-price">$75.00</span>
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
                    @foreach($promo as $pm)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-offer-products-box">
                            <div class="offer-products-image">
                                <a href="/cogitech/details/promo/{{ $pm->id }}"><img src="{{URL::asset('admin/media/'.$pm->photo)}}" alt="image"></a>
                                <div class="tag">{{ $pm->reduction }}</div>

                                <ul class="offer-action">
                                    <li>
                                     <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $pm->id }}">
                                        <a onclick="document.getElementById('myForm').submit()">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </form>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="/cogitech/details/promo/{{ $pm->id }}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>

                            </div>

                            <div class="offer-products-content">
                                <span>Gadget</span>
                                <h3>
                                    <a href="/cogitech/details/promo/{{ $pm->id }}">{{ $pm->titre }}</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">
                                        {{ $pm->newPrice }}
                                        @if($pm->newPrice  and !is_null($pm->newPrice ))
                                        FCFA
                                        @else
                                        @endif
                                    </span>
                                    <span class="old-price">
                                        {{ $pm->ancPrice }}
                                        @if($pm->ancPrice and !is_null($pm->ancPrice))
                                        FCFA
                                        @else
                                        @endif
                                    </span>
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
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="offer-overview">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="offer-image">
                                        <img src="{{ asset('front/img/offer-products/offer-products-7.png') }}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="offer-content">
                                        <h3>Profitez de nos offre</h3>
                                        <span>à moindre coût</span>
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

<!-- Start Offer Pc Area -->
<section class="offer-products-area pb-70" style="padding-top: 2em;">
    <div class="container">
        <div class="section-title">
            <h2>Nos offres Serveur web</h2>
        </div>
        @if($serveur->count()>0)
        <div class="row">
            @foreach($serveur as $sv)
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-products">
                    <div class="offer-products-image">
                        <a href="/cogitech/details/produits/{{ $sv->id }}"><img src="{{URL::asset('admin/media/'.$sv->photo)}}" alt="image"></a>
                        <div class="tag">{{ $sv->reduction }}</div>
                    </div>

                    <div class="offer-products-content">
                        <span>Equipement</span>
                        <h3>
                            <a href="products-details.html">{{ $sv->titre }}</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">{{ $sv->newPrice }}
                                @if($sv->newPrice  and !is_null($sv->newPrice ))
                                FCFA
                                @else
                            @endif</span>
                            <span class="old-price">{{ $sv->ancPrice }}
                                @if($sv->ancPrice  and !is_null($sv->ancPrice ))
                                FCFA
                                @else
                            @endif</span>
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
            @endforeach
        </div>
        @else
        <h5 style="color:red;text-align: center;">Aucune offre sur nos serveurs</h5>
        @endif
    </div>
</section>
<!-- End Offer Pc Area -->


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
@endsection