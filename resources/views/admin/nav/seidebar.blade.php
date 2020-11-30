<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user" style="background: #000; margin: 0px; margin-top:-1.5em;">
        
        <img  src="{{ asset('assetts/images/big/logo.png') }}" alt="logo MG" style="max-height: 80px; border-radius: 0px;">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->Name}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TABLEAU DE BORD</span></a></li>
        
        <li><a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Nos produits</span></a></li>

        <li><a class="app-menu__item" href="/cogitech/liste/promo"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Nos promotions</span></a></li>
        
        <li><a class="app-menu__item" href="/cogitech/liste/commande"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Commandes</span></a></li>

        <li><a class="app-menu__item" href="/cogitech/liste/users"><i class="app-menu__icon fa-shopping-cart"></i><span class="app-menu__label">Mes users</span></a></li>

        <li><a class="app-menu__item" target="_blank" href="/"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">SITE INTERNET</span></a></li>

      </ul>
    </aside>