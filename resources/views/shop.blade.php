<!doctype html>
	<html lang>
		@include('/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/include/header')
			@include('/include/sidebar')
			<main class=mdl-layout__content>
				<div class=hb-section>
					<div class="hb-section__background hb-background-parallax">
                        <img src="{{  asset('images/backgrounds/bg17-notinclude.jpg') }}" alt="section background">
                    </div>
                    <div class="hb-section__overlay hb-section__overlay--gradient-from-top-50"></div>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-150 hb-margin-bottom-150">Summer Collection</h1>
                        </div>
                    </div>
                </div>
                <div class=hb-section>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40 hb-margin-bottom-30">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone hb-product-filters">Showing <strong>14</strong> products
                                <form method="get" action="{{ url('/shop') }}" class=hb-display-inline>
									{{ csrf_field() }}
                                    <div class="mdl-selectfield mdl-js-selectfield hb-product-filters__selectfield" tabindex=-1>
                                        <select name=orderby class=mdl-selectfield__select onchange="this.form.submit()">
                                            <option value=date><button type="submit">Sort By Date</button></option>
                                            <option value=price_asc>Sort By Price Asc</option>
                                            <option value=price_desc>Sort By Price Desc</option>
                                            <option value=popularity selected>Sort By Popularity</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
							@foreach($all as $produit)
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href="{{ url('/single-product', $produit->id) }}">
											@php
												$test = 0;
											@endphp
											@foreach($images as $image)
												@if($test != 2 )
													@if($image->id_produit == $produit->id)
														@php
															$test++;
														@endphp
														<img alt="some product" class="hb-card-product__image" src="{{ asset($image->img_src) }}" width="100%" height="100%">
													@endif
												@endif
											@endforeach
                                        </a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>{{ $produit->nom_produit }}</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=posts rel=tag>{{ $produit->nom }}</a>, 
                                                <a href=posts rel=tag>{{ $produit->sous_categorie }}</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%>
                                                    <strong class=hb-rating__stars>4.00</strong> out of 5
                                                </span>
                                            </div>
                                        </div>
										@if($produit->nbr_stock == 0)
										<div class="hb-card-product__badge hb-product-badge">Epuise</div>
										@endif
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <ins><span>{{ $produit->prix }}$</span></ins>
                                        </strong> 
										<form method="post" action="{{ url('cart') }}">
											
									{{ csrf_field() }}
											<input name="id" value="{{ $produit->id }}" hidden="true">
											<input name="qte" value=1 hidden="true">
										<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
											<i class="material-icons">add_shopping_cart</i>
										</button>
										</form>
                                    </div>
                                </div>
                            </div>
							@endforeach
                        </div>
						
									<div class=mdl-grid>
                                     <div class="mdl-cell mdl-cell--12-col">
										{{ $all->render() }}
                            		</div>
									</div>
                    </div>
                </div>
                <div class=hb-section>
                    <div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
                        <img src="{{  asset('images/backgrounds/bg9-notinclude.jpg') }}" alt="section background">
                    </div>
                    <div class=hb-section__overlay></div>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <h2 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-80 hb-margin-bottom-20">Never Miss An Offer</h2>
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