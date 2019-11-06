<!doctype html>
	<html lang>
		@include('/Fournisseur/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/Fournisseur/include/header')
			     @include('/Fournisseur/include/sidebarFornisseur')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-30 hb-margin-bottom-300 mdl-typography--text-center">Profil</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240 hb-margin-bottom--0 " style="margin:200px;">
					  <div class="mdl-grid portfolio-max-width">

                <div class="mdl-card-user2 mdl-cell mdl-cell--12-col mdl-shadow--6dp" style="marin-bottom:50px">
                    <div class="mdl-card-user2--header" >
							@if($images != null)
							@if(!$images->cover_src)
								<img src="{{ asset('images/cover.jpg') }}" class="mdl-img-responsive mdl-shadow--4dp" height="250px">
							@else
                        		<img src="{{ asset($images->cover_src) }}" class="mdl-img-responsive mdl-shadow--4dp" height="250px">
							@endif
							@if(!$images->pdp_src)
								<img class="mdl-card-user2--img-left circle mdl-shadow--4dp" src="{{ asset('images/defaut.jpg') }}" height="100px" style="width: 100px;">
							@else
								<img class="mdl-card-user2--img-left circle mdl-shadow--4dp" src="{{ asset($images->pdp_src) }}" height="100px" style="width: 100px;">
							@endif
							@else
								<img src="{{ asset('images/cover.jpg') }}" class="mdl-img-responsive mdl-shadow--4dp" height="250px">
								<img class="mdl-card-user2--img-left circle mdl-shadow--4dp" src="{{ asset('images/defaut.jpg') }}" height="100px" style="width: 100px;">
							@endif
							
                    </div>
                    <div class="mdl-card-user2--body" style="margin-top:20px;">
                        <div class="bold" style="font-size: 20px;">{{ $user->name }}
							<a href="{{ route('Profilsettings') }}">
								<i class="fa fa-edit icon material-icons" id="tooltip" style="margin-left:10px;margin-top:5px;font-size:20px;"></i>
								<p class="mdl-tooltip" for="tooltip">Profil Settings</p>
							</a>	
						</div>
                        <div class="mdl-color-text--grey">{{ $role->libelle }}</div>
                        <ul class="mdl-card-user2--list">
                        <li><i class="material-icons icon">location_on</i>"..."</li>
                        <li style="display: list-item; text-align: -webkit-match-parent;"><i class="material-icons icon">person</i>"..."</li>
                        <li><i class="material-icons icon">email</i>"{{ $user->email }}"</li>
                        </ul>
                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Biographie</h3>
                        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
                            <p>
                               {{ $user->bio }}
                            </p>
                        </div>
                    </div>

                    <div class="mdl-card-user2--footer" style="padding: 5px;text-align: center;display: block;">
                        <a href=# class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-facebook" style="color: #3b5998;"></i></a> 
				        <a href=# class="mdl-button mdl-js-button mdl-button--icon mdl-button--primary"><i class="fa fa-twitter" style="color: #00aced;"></i></a> 
                    </div>
                </div>


            </div>
					</div>
				
					@include('/Fournisseur/include/footerFornisseur')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>