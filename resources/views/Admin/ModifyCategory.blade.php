<!doctype html>
	<html lang>
		@include('/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/include/headerUser')
			     @include('/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-300 mdl-typography--text-center">Modify Category</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240">
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--2-col"></div>
								<div class="mdl-cell mdl-cell--8-col">
									<div class="mdl-card mdl-shadow--2dp hb-card-contact hb-animation hb-margin-bottom-80" data-os-animation=fadeIn data-os-animation-delay=0.1s>
										<div class=google-map id=map style="height:80px; width:80px;"></div>
										<div class=mdl-card__supporting-text>
											<form action="" class="contact-form mdl-typography--text-center" id=contactForm>
                                                {{ csrf_field() }}
												<div class="mdl-grid mdl-grid--no-fullwidth">
                                             
												<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=name>Category Name</label> 
												<input class=mdl-textfield__input type=text id=name >
											</div>
										</div>
                                                    		<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=price>Sous-category</label> 
												<input class=mdl-textfield__input type=text id=price >
											</div>
										</div>
                                             
										</div>
										
										
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <button type=submit class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-45 hb-margin-left-300 hb-margin-top-45" >Add</button>
                                                    </div>       
												<div class=hb-messages></div>
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
					@include('/include/footerUser')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>