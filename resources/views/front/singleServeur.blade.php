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

                       {{--  <div class="product-quantities">
                            <span>Quantité:</span>

                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class='bx bx-minus'></i>
                                </span>
                                <input type="text" value="1">
                                <span class="plus-btn">
                                    <i class='bx bx-plus'></i>
                                </span>
                            </div>
                        </div> --}}

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
        </div>{{-- 
        <div class="products-details-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description">Description</a></li>
                <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information">Shipping Information</a></li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <h2>Overview</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</p>

                    <ul>
                        <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                        <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>
                        <li>Various versions have evolved over the years, sometimes by accident sometimes on purpose.</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</li>
                    </ul>
                </div>

                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="products-reviews">
                        <h3>Reviews</h3>

                        <div class="row">
                            <div class="side">
                                <div>5 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>70%</div>
                            </div>
                            <div class="side">
                                <div>4 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>20%</div>
                            </div>
                            <div class="side">
                                <div>3 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>5%</div>
                            </div>
                            <div class="side">
                                <div>2 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>3%</div>
                            </div>
                            <div class="side">
                                <div>1 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>2%</div>
                            </div>
                        </div>
                    </div>

                    <div class="products-review-form">
                        <h3>Customer Reviews</h3>

                        <div class="review-title">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>

                            <a href="#" class="default-btn">
                                Write a Review
                                <span></span>
                            </a>
                        </div>

                        <div class="review-comments">
                            <div class="review-item">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <h3>Good</h3>
                                <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                            <div class="review-item">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <h3>Good</h3>
                                <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                            <div class="review-item">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <h3>Good</h3>
                                <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>

                        <div class="review-form">
                            <h3>Write a Review</h3>

                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="review-body" id="review-body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            Submit Review
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="information" role="tabpanel">
                    <ul class="information-list">
                        <li>Address: <span>4848 Hershell Hollow Road, Bothell, WA 89076</span></li>
                        <li>Phone: <a href="tel:+15143214567">+1 (514) 321-4567</a></li>
                        <li>Email: <a href="mailto:hello@ejon.com">hello@ejon.com</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
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