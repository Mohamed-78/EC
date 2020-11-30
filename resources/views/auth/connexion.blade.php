@extends('front.layouts.default',['title' => 'CONNEXION'])

@section('content')


<!-- Start Page Banner -->
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<h2 style="color: white;">Se connecter</h2>

			<ul>
				<li><a href="{{ route('accueil') }}" style="color: white;">Accueil</a></li>
				<li style="color: white;">Se connecter</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Banner -->

<!-- Start Login Area -->
<section class="login-area ptb-50">
	<div class="container">
		<div class="login-form">
			<h2>Se connecter</h2>

			<form action="{{ route('login') }}" method="post">
            @csrf
				<div class="form-group">
					<input id="email" type="email" ng-model="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="form-group">
                      <input id="password" type="password" ng-model="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="checkme" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="checkme">Connexion automatique</label>
						</div>
					</div>
				</div>

				<button type="submit">Connexion</button>
			</form>

			<div class="important-text">
				<p>Vous n'avez pas de compte? <a href="/cogitech/inscription">Inscrivez-vous maintenant!</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End Login Area -->
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