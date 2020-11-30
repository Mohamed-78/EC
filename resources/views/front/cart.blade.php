@extends('front.layouts.default',['title' => 'PANIER'])

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: white;">MON PANIER</h2>

            <ul>
                <li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
                <li style="color: white;">Panier</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Cart Area -->
@if(Cart::count() > 0)
<section class="cart-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Images</th>
                                    <th scope="col">Titres</th>
                                    <th scope="col">Prix unitaire</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach(Cart::content() as $panier)
                                <form action="{{ route('cmde') }}" method="post">
                                    @csrf
                                <tr class="top-class">
                                    <td class="product-thumbnail">
                                        <a>
                                        <img src="{{URL::asset('admin/media/'.$panier->model->photo)}}" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a style="text-align: center;">{{ $panier->model->titre }}</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount" style="text-align: center;">{{number_format($panier->model->prix), 0, ',', ' '}}
                                            @if($panier->model->prix  and !is_null($panier->model->prix ))
                                            FCFA
                                            @else
                                            @endif
                                        </span>
                                    </td>
                                    <td class="product-subtotal">
                                         {{-- <form action="{{ route('cart.destroy',$panier->rowId) }}" method="post">
                                           @csrf
                                           @method('DELETE') --}}
                                           <a href="/panier/{{ $panier->rowId }}" class="btn btn-danger">
                                            <i class='bx bx-trash'></i></a>
                                       {{--  </form> --}}
                                    </td>
                                </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7" style="visibility: hidden;">
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                <a href="/cogitech/vider/panier" class="default-btn">
                                    Vider le panier
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
               
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="cart-totals">
                    <h3>Details de la commande</h3>

                    <ul>
                        <li>Sous-total<span>{{ getPrice(Cart::subtotal()) }}</span></li>
                        <li>Taxe (18%)<span>{{ getPrice(Cart::tax()) }}</span></li>
                        <li>Total<span>{{ getPrice(Cart::total()) }}</span></li>
                    </ul>

                    <a href="/cogitech/commande/client" class="default-btn">
                        Passer la commande
                        <span></span>
                    </a>
                </div>
            </div>
             </form>
        </div>
    </div>
</section>
@else
<h3 style="color:red;text-align: center;padding-top: 3em;"><i class="flaticon-shopping-cart"></i>&nbsp;Votre panier est vide</h3>
@endif
<!-- End Cart Area -->
@endsection