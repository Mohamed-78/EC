@extends('front.layouts.default',['title' => 'PANIER'])

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: white;">MA COMMANDE</h2>

            <ul>
                <li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
                <li style="color: white;">Commande</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<section class="checkout-area ptb-50">
    <div class="container">
        <form action="{{ route('cmde') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="user-actions">
                        <i class='bx bx-log-in'></i>
                        <span>Vous déjà inscrit? <a href="/cogitech/connexion">Connectez-vous</a></span>
                    </div>

                    <div class="billing-details">
                        <h3 class="title">Détails de la commande</h3>

                        @foreach(Cart::content() as $panier)
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Titre du produit<span class="required">*</span></label>
                                    <input type="text" name="titre" value="{{ $panier->model->titre }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Prix hors taxe<span class="required">*</span></label>
                                    <input type="text" name="prix" value="{{ $panier->model->prix }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Quantité<span class="required">*</span></label>
                                    <select name="qty" id="qty" class="custom-select">
                                        @for($i=1; $i<=6; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                             <div class="payment-box">
                                <h3 class="title">Methode de paiement</h3>

                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                        <label for="direct-bank-transfer">A la livraison</label>  
                                    </p>
                                </div>

                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="order-details">
                        <div class="cart-totals">
                            <h3>Ma commande</h3>

                            <ul>
                                <li>Sous-total<span>{{ getPrice(Cart::subtotal()) }}</span></li>
                                <input type="text" name="sous_tt" value="{{ getPrice(Cart::subtotal()) }}" style="visibility: hidden;">
                                <li>Taxe (18%)<span>{{ getPrice(Cart::tax()) }}</span></li>
                                 <input type="text" name="taxe" value="{{ getPrice(Cart::tax()) }}" style="visibility: hidden;">
                                <li>Total<span>{{ getPrice(Cart::total()) }}</span></li>
                                 <input type="text" name="total" value="{{ getPrice(Cart::total()) }}" style="visibility: hidden;">
                            </ul>

                            <button type="submit" class="default-btn">
                                Commandez
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

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
<!-- End Cart Area -->
@endsection