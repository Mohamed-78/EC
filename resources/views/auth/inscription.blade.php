@extends('front.layouts.default',['title' => 'INSCRIPTION'])

@section('content')


<!-- Start Page Banner -->
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<h2 style="color: white;">Inscription</h2>

			<ul>
				<li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
				<li style="color: white;">Inscription</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Banner -->

<!-- Start Register Area -->
<section class="register-area ptb-50">
    <div class="container">
        <div class="register-form">
            <h2>Inscription</h2>

            <form action="{{ route('createClt') }}" method="post">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="Prenom">

                    @error('prenom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus placeholder="contact">

                    @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="residence" type="text" class="form-control @error('residence') is-invalid @enderror" name="residence" value="{{ old('residence') }}" required autocomplete="residence" autofocus placeholder="residence">

                    @error('residence')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                   @error('email')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                 <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">

                 @error('password')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
            </div>

            <button type="submit">S'inscrire</button>
    </form>

    <div class="important-text">
        <p>Vous avez dejà un compte? <a href="/cogitech/connexion">Connectez-vous!</a></p>
    </div>
</div>
</div>
</section>
<!-- End Register Area -->
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