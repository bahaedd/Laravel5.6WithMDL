@if(Auth::guest())
            <header class="mdl-layout__header mdl-layout__header--waterfall hb-layout__header">
				<div class="mdl-layout__header-row">
					<a class="mdl-layout-title" href="index">
						<img src="{{ asset('images/logo.png') }}" alt="hbshop!" width="100" height="85">
					</a>
					<div class="mdl-layout-spacer"></div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp"><i class="material-icons">search</i></label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp">
						</div>
					</div>
					<nav class="mdl-navigation mdl-layout--large-screen-only">
						<a class="mdl-navigation__link" href="cart">CART</a>
						<a class="mdl-navigation__link" href="{{ url('/login') }}">Login</a>
						<a class="mdl-navigation__link" href="{{ url('/register') }}">Register</a>
					</nav>
				</div>
			</header>
@else


            <header class="mdl-layout__header mdl-layout__header--waterfall hb-layout__header">
				<div class="mdl-layout__header-row">
					<a class="mdl-layout-title" href="index">
						<img src="{{ asset('images/logo.png') }}" alt="hbshop!" width="100" height="85">
					</a>
					<div class="mdl-layout-spacer"></div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp"><i class="material-icons">search</i></label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp">
						</div>
					</div>
					<nav class="mdl-navigation mdl-layout--large-screen-only">
						<a class="mdl-navigation__link" href="cart">CART</a>
<nav class="mdl-navigation">
						<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">perm_identity</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  
  <li class="mdl-menu__item"><a href="{{ url('/Profilsettings') }}"> <i class="material-icons mdl-list__item-icon">settings</i>         Settings</a></li>
  <li class="mdl-menu__item"><a href="{{ url('/logout') }}"> <i class="material-icons mdl-list__item-icon">power_settings_new</i>Log out</a></li>
</ul>
					</nav>
					</nav>
				</div>
			</header>

@endif