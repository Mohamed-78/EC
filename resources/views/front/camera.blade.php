@extends('front.layouts.default',['title' => 'PRODUITS'])

@section('content')

<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: white;">CAMERAS DE SURVEILLANCE</h2>

            <ul>
                <li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
                <li style="color: white;">Cameras de surveillance</li>
            </ul>
        </div>
    </div>
</div>
<!-- Start Shop Area -->
@if($serveur->count()>0)
<section class="shop-area bg-ffffff pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <div class="widget widget_search">
                         @include('front.partials.searchy')
                    </div>
                    
                    <div class="widget widget_categories">
                         <div class="widget widget_arrival">
                        <div class="special-products-inner">
                            <div class="inner-content">
                                <span>Nouveauté!!!</span>
                                <h3>Commandez maintenant</h3>
                                <p>Le stock est limité</p>
                            </div>
                        </div>
                    </div>
                    </div>

                    @if($promo->count()>0)
                    <div class="widget widget_best-seller-products">
                        <h3 class="widget-title">Produits en promotion</h3>
                        @foreach($promo as $pm)
                        <article class="item">
                            <a href="/cogitech/details/promo/{{ $pm->id }}" class="thumb">
                              <img src="{{URL::asset('admin/media/'.$pm->photo)}}" alt="image">
                            </a>
                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="/cogitech/details/promo/{{ $pm->id }}{{ $pm->id }}">{{ $pm->titre }}</a>
                                </h4>
                                <span>{{number_format($pm->newPrice), 0, ',', ' '}}
                                    @if($pm->newPrice and !is_null($pm->newPrice))
                                    FCFA
                                @endif</span>
                              
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    @else
                    <div class="widget widget_arrival">
                        <div class="special-products-inner">
                            <div class="inner-content">
                                <span style="color: white;">Nouveauté!!!</span>
                                <h3 style="color: white;">Commandez maintenant</h3>
                                <p style="color: white;">Le stock est limité</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="widget widget_arrival">
                        <div class="special-products-inner">
                            <div class="inner-content">
                                <span style="color: white;">Nouveauté!!!</span>
                                <h3 style="color: white;">Commandez maintenant</h3>
                                <p style="color: white;">Le stock est limité</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="products-filter-options">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                        </div>
                        <div class="col-lg-4 col-md-4">
                        </div>
                    </div>
                </div>
                @if($serveur->count()>0)
                <div id="products-collections-filter" class="row">

                    @foreach($serveur as $ann)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-shop-products">
                            <div class="shop-products-image">
                                <a href="/cogitech/details/camera/{{ $ann->id }}"><img src="{{URL::asset('admin/media/'.$ann->photo)}}" alt="image"></a>
                                <div class="tag">New</div>
                                <ul class="shop-action">
                                    <li>
                                     <form action="{{ route('cart.store') }}" id="myForm" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $ann->id }}">
                                        <a onclick="document.getElementById('myForm').submit()">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </form>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="/cogitech/details/camera/{{ $ann->id }}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="shop-products-content">
                                <h3>
                                    <a href="/cogitech/details/camera/{{ $ann->id }}">{{ $ann->titre }}</a>
                                </h3>
                                <ul class="rating">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <span>{{number_format($ann->prix), 0, ',', ' '}}
                                    @if($ann->prix and !is_null($ann->prix))
                                    FCFA
                                    @else
                                @endif</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <p>{{ $serveur->links() }}</p>
                        </div>
                    </div>
                </div>
                @else
                <h5 style="color: red;text-align: center;">Aucun produit</h5>
                @endif
            </div>
        </div>
    </div>
</section>
@else
<h6 style="color: red;text-align: center;padding-top: 2em;">Aucune annonce</h6>
@endif
@endsection