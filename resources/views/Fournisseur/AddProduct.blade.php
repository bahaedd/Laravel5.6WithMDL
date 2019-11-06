<!doctype html>
	<html lang>
		@include('Fournisseur/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('Fournisseur/include/headerFornisseur')
			     @include('Fournisseur/include/sidebarFornisseur')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-300 mdl-typography--text-center">Add Product</h1>
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
											<form method="POST" action="{{ url('/AddProduct') }}" class="contact-form mdl-typography--text-center" enctype="multipart/form-data">
                                                {{ csrf_field() }}
												<div class="mdl-grid mdl-grid--no-fullwidth">
                                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex=-1>
												<select name=category class=mdl-selectfield__select>
														<option value selected>Select Category</option>
                                                        <option value=mens>Mens's Clothes</option>
                                                        <option value=wemen>Wemens's Clothes</option>
                                                </select>
                                                        </div></div>
                                                             <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex=-1>
												<select name=subcategory class=mdl-selectfield__select>
														<option value selected>Select Sous-Category</option>
														<option value=winter>Winter Collection</option>
                                                        <option value=summer>Summer Collection</option>
                                                        <option value=sports>Sports Collection</option>
                                                        <option value=kids>Kids Collection</option>
                                                </select>
                                                        </div></div>
												<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for="name">Product Name</label> 
												<input class=mdl-textfield__input type=text id="name" name="name">
											</div>
										</div>
                                                    		<div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=prix>Price</label> 
												<input class=mdl-textfield__input type=text id=prix name="prix">
											</div>
										</div>
                                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=nbr_stock>Stock Number</label> 
												<input class=mdl-textfield__input type=text id=nbr_stock name="nbr_stock">
											</div>
										</div>
                                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
											<div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												<label class=mdl-textfield__label for=description>Description</label> 
												<input class=mdl-textfield__input type=text id=description name="description">
											</div>
													</div>
                                                    <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
												 
												<input class=mdl-textfield__input type="file" id=image value="Select Image" name="image[]" multiple>
											</div>
										</div>
										
										
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <button type=submit class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-45 hb-margin-left-300 hb-margin-top-45" >Add</button>
                                                    </div>  
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
					
                @include('Fournisseur/include/footerFornisseur')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>