<!doctype html>
	<html lang>
		@include('/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/include/header')
			     @include('/include/sidebar')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-300 mdl-typography--text-center">Register</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240">
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--2-col"></div>
								<div class="mdl-cell mdl-cell--8-col">
									<div class="mdl-card mdl-shadow--2dp hb-card-contact hb-animation hb-margin-bottom-80" data-os-animation=fadeIn data-os-animation-delay=0.1s>
										<div class=google-map id=map style="height:80px; width:80px;"></div>
										<div class="mdl-card__supporting-text mdl-typography--text-center">
											@if (session('confirmation-success'))
												<p class="mdl-color--primary-dark mdl-color-text--primary-contrast" style="color:#155724;background-color:#dff0d8">
													{{ session('confirmation-success') }}
												</p>
											@endif
											<form action="#">
												{{ csrf_field() }}
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="nom" name="name" value="{{ old('name') }}" required autofocus>
														@if ($errors->has('name'))
															<span class="help-block">
																<strong>{{ $errors->first('name') }}</strong>
															</span>
														@endif
														<label class="mdl-textfield__label" for="nom">Nom</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="email" name="email" value="{{ old('email') }}" required>
														@if ($errors->has('email'))
															<span class="help-block">
																<strong>{{ $errors->first('email') }}</strong>
															</span>
														@endif
														<label class="mdl-textfield__label" for="email">Email</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="password" name="password" required>
														@if ($errors->has('password'))
															<span class="help-block">
																<strong>{{ $errors->first('password') }}</strong>
															</span>
														@endif
														<label class="mdl-textfield__label" for="password">Mot de Passe</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="password_confirmation" name="password_confirmation" required>
														<label class="mdl-textfield__label" for="password_confirmation">Confirm Mot de passe</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<button type=submit class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10 hb-margin-top-10">S'enregistrer</button>
												</div>
											</form>
										</div>
										<div class="mdl-card__actions mdl-card--border mdl-typography--text-center">
											<a href=# class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-facebook" style="color: #3b5998;"></i></a> 
											<a href=# class="mdl-button mdl-js-button mdl-button--icon mdl-button--primary"><i class="fa fa-twitter" style="color: #00aced;"></i></a> 
											<a href=# class="mdl-button mdl-js-button mdl-button--icon mdl-button--primary"><i class="fa fa-flickr" style="color: #ff0084;"></i></a> 
											<a href=# class="mdl-button mdl-js-button mdl-button--icon mdl-button--primary"><i class="fa fa-linkedin" style="color: #007bb5;"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@include('/include/footer')
				</main>
			</div>
			@include('/include/sidecart')
		</body>
	</html>