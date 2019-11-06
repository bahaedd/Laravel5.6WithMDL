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
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-300 mdl-typography--text-center">Get In Touch</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240">
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--2-col"></div>
								<div class="mdl-cell mdl-cell--8-col">
									<div class="mdl-card mdl-shadow--2dp hb-card-contact hb-animation hb-margin-bottom-80" data-os-animation=fadeIn data-os-animation-delay=0.1s>
										<div class=google-map id=map style=height:450px></div>
										<div class=mdl-card__supporting-text>
											<form method="POST" action="{{ url('/contact') }}" class="contact-form mdl-typography--text-center" id=contactForm>
												{{ csrf_field() }}
												<div class="mdl-grid mdl-grid--no-fullwidth">
													<div class="mdl-cell mdl-cell--6-col">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
															<label class="mdl-textfield__label" for="name">Your name</label> 
															<input class="mdl-textfield__input" name="name" type="text" id="name">
														</div>
													</div>
													<div class="mdl-cell mdl-cell--6-col">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
															<label class="mdl-textfield__label" for="email">Your email</label> 
															<input class="mdl-textfield__input" name="email" type="text" id="email">
														</div>
													</div>
													<div class="mdl-cell mdl-cell--12-col">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
															<label class="mdl-textfield__label" for="message">Your message</label> 
															<textarea class="mdl-textfield__input" type="text" name="message" rows="10" id="message"></textarea>
														</div>
														<button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10">Send Email</button>
													</div>
												</div>
												<div class=hb-messages></div>
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
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--color-30"></div>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--12-col">
									<h2 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-80 hb-margin-bottom-20">
										Never Miss An Offer
									</h2>
								</div>
							</div>
							<form action=# class="hb-margin-bottom-80 hb-color-light">
								<div class="mdl-grid mdl-grid--no-fullwidth">
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class=mdl-textfield__label for=signup-name>Your name</label> 
											<input class=mdl-textfield__input type=text id=signup-name>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class=mdl-textfield__label for=signup-email>Your email</label> 
											<input class=mdl-textfield__input type=text id=signup-email>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell--middle">
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10">Sign Up</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					@include('/include/footer')
				</main>
			</div>
			@include('/include/sidecart')
		</body>
	</html>