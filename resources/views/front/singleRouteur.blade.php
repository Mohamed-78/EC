@extends('front.layouts.default',['title' => 'DETAILS'])

@section('content')

<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: white;">Details du produit</h2>

            <ul>
                <li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
                <li style="color: white;">Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Products Details Area -->
<section class="products-details-area ptb-50">
    <div class="container">
        <div class="products-details-desc">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="main-products-image">
                        <div class="slider slider-nav">
                            @if ($single->photos)
                            @foreach(json_decode($single->photos) as $image)
                            <div><img src="{{URL::asset('admin/media/'.$image)}}"></div>
                            @endforeach
                            @endif
                        </div>

                        <div class="slider slider-for">
                            @if(!$single->photos)
                            <div><img src="{{URL::asset('admin/media/'.$single->photo)}}"></div>
                            @endif
                            @if ($single->photos)
                            @foreach(json_decode($single->photos) as $image)
                            <div><img src="{{URL::asset('admin/media/'.$image)}}"></div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="product-content content-two">
                        <h3>{{ $single->titre }}</h3>

                        <div class="product-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>

                        <div class="price">{{-- 
                            <span class="old-price">$150.00</span> --}}
                            <span class="new-price">
                                {{ $single->prix }}
                                    @if($single->prix and !is_null($single->prix))
                                    FCFA
                                    @else
                                    @endif
                            </span>
                        </div>
                        <p style="text-align: justify;">{{ $single->description }}</p>

                        <div class="product-add-to-cart">
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $single->id }}">
                                <button type="submit" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Ajouter au panier
                                    <span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Details Area -->

<!-- Start Arrivals Products Area -->
@if($single->count() >0)
<section class="arrivals-products-area pt-50 pb-20">
    <div class="container">
        <div class="section-title">
            <h2>Autres produits</h2>
        </div>
        <div class="row">
        @foreach($other as $prd)
            <div class="col-lg-3 col-sm-6">
                <div class="single-arrivals-products">
                    <div class="arrivals-products-image">
                        <a href="/cogitech/details/produits/{{ $prd->id }}"><img src="{{URL::asset('admin/media/'.$prd->photo)}}" alt="image"></a>
                        <div class="tag">New</div>
                        <ul class="arrivals-action">
                            <li>
                                <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="/cogitech/details/produits/{{ $prd->id }}"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="arrivals-products-content">
                        <h3>
                            <a href="cogitech/details/produits/{{ $prd->id }}">{{ $prd->titre }}</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>{{ $prd->prix }}
                            @if($prd->prix and !is_null($prd->prix))
                            FCFA
                            @else
                        @endif</span>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endif
<!-- End Arrivals Products Area -->

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

@endsection