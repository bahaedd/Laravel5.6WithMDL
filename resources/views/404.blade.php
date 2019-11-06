<!doctype html>
<html lang>
	@include('/include/head')
	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
			@include('/include/header')
			     @include('/include/sidebar')
			<main class=mdl-layout__content>
				<div class="hb-section hb-color-primary">
					<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
					
						<img src="{{ asset('images/backgrounds/bg9-notinclude.jpg') }}" alt="section background">
					</div>
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth">
							<div class="hb-margin-top-150 hb-margin-bottom-300"></div>
						</div>
					</div>
				</div>
				<div class="hb-section hb-margin-top--300">
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-bottom-40">
							<div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet"></div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-typography--text-center">
								<h1 class=hb-bigtext><span class="hb-color-light mdl-typography--font-thin">404</span></h1>
								<p class="hb-margin-top-40 mdl-typography--display-1 mdl-typography--font-light">Oups, sorry the page does not exist</p>
								<a href=index class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary hb-margin-bottom-100">
									Go back to Home page
								</a>
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