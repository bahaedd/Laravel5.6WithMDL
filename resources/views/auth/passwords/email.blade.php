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
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-300 mdl-typography--text-center">Reset Password</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240">
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--2-col"></div>
								<div class="mdl-cell mdl-cell--8-col">
									<div class="mdl-card mdl-shadow--2dp hb-card-contact hb-animation hb-margin-bottom-80" data-os-animation=fadeIn data-os-animation-delay=0.1s>
										<div class=google-map id=map style=height:80px></div>
										<div class="mdl-card__supporting-text mdl-typography--text-center" name="email" value="{{ old('email') }}" required>
											@if (session('status'))
												<p class="mdl-color--primary-dark mdl-color-text--primary-contrast" style="color:#155724;background-color:#dff0d8">
													{{ session('status') }}
												</p>
											@endif
											<form method="POST" action="{{ route('password.email') }}">
												{{ csrf_field() }}
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="email" name="email" value="{{ old('email') }}" required>
														<label class="mdl-textfield__label" for="email">Email</label>
														@if ($errors->has('email'))
															<span class="invalid-feedback">
																<strong>{{ $errors->first('email') }}</strong>
															</span>
														@endif
													</div>
													<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<button type=submit class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10 hb-margin-top-10">Reinitialiser</button>
												</div>
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