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
						<img src="{{ asset($images[0]->img_src) }}" alt="section background" class=hb-photo-blur-3>
					</div>
					<div class="hb-section__overlay hb-section__overlay--gradient-from-top-50"></div>
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth">
							<div class=hb-divider style="height: 200px;"></div>
						</div>
					</div>
				</div>
				<div class=hb-section>
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40 hb-margin-bottom-30">
							<div class="mdl-cell--middle mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
								<ol class=hb-breadcrumb>
									<li class=hb-breadcrumb__item><a href=shop>Home</a></li>
									<li class=hb-breadcrumb__item><a href=shop>{{ $categorie->nom }}</a></li>
									<li class=hb-breadcrumb__item><span>{{ $categorie->sous_categorie }}</span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class=hb-section>
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth">
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
								<div class=hb-product-slider>
									@if($produit->nbr_stock == 0)
									<div class=hb-product-badge>Epuise</div>
									@endif
									<div class="flexslider hb-product-slider__slides" data-flex-animation=slide data-flex-controls=thumbnails data-flex-controlsalign=left data-flex-controlsposition=outside data-flex-directions=hide data-flex-directions-type=simple data-flex-duration=600 data-flex-slideshow=true data-flex-speed=7000 id=product-images>
										<ul class=slides>
											@foreach($images as $image)
											<li data-thumb="{{ asset($image->img_src) }}">
												<img alt="Top Fancy" src="{{ asset($image->img_src) }}">
											</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone hb-product-details">
								<h1 class="mdl-typography--display-1 hb-margin-top-0 hb-margin-bottom-10">{{ $produit->nom_produit }}</h1>
								<p class="mdl-typography--display-1 hb-margin-0 hb-margin-bottom-20 hb-product-price">
                                    <ins><span>{{ $produit->prix }}$</span></ins>
								</p>
								<a href=#product-reviews-tab id=review-rating-tooltip class="hb-rating hb-rating--big hb-margin-bottom-20 hb-display-inline-block" title="Rated {{$produit->note}}%">
									<span style="width:{{$produit->note}}%">
                                        <strong class=hb-rating__stars>{{$produit->note}}</strong>%
                                    </span>
								</a>
								<div class=mdl-tooltip for=review-rating-tooltip>
									<span itemprop=reviewCount class=count>1</span> customer review
								</div>
								<p><strong>Fournisseur : </strong><a href="{{ url('profil', $user->id) }}">{{ $user->name }}</a></p>
								<p class="mdl-typography--title mdl-typography--font-light hb-typography-line-height-normal hb-opacity-50"  style="word-wrap: break-word;height:120px;overflow:hidden">
									{{ $produit->description }}
								</p>
								<form class=hb-margin-bottom-30 method="post" action="{{ url('cart') }}">
									{{ csrf_field() }}
									<input name="id" value="{{ $produit->id }}" hidden="true">
									<table class=hb-product-details__options>
										<tbody>
											<tr>
												<td>
                                                    <label for=color>Size:</label>
                                                </td>
												<td>
                                                    <div class="mdl-selectfield mdl-js-selectfield" tabindex=-1>
                                                        <select name=size class=mdl-selectfield__select>
                                                            <option value=Small>Small</option>
                                                            <option value=Medium>Medium</option>
                                                            <option value=Large>Large</option>
                                                        </select>
                                                    </div>
                                                </td>
											</tr>
											<tr>
												<td><label for=color>Color:</label></td>
												<td>
													<div class="mdl-selectfield mdl-js-selectfield" tabindex=-1>
														<select name=color class=mdl-selectfield__select>
                                                            <option value=Green>Green</option>
                                                            <option value=Red>Red</option>
                                                            <option value=Yellow>Yellow</option>
                                                            <option value=Pink selected>Pink</option>
                                                        </select>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									<div class=hb-quantity>
										<input type=button value=->
										<div class="mdl-textfield mdl-js-textfield">
											<input type=number step=1 min=0 name=qte value=1 title=qte class=mdl-textfield__input id=qte> 
											<label class=mdl-textfield__label for=qte></label>
										</div>
										<input type=button value=+>
									</div>
									<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add to cart</button>
								</form>
								<div class=mdl-grid>
									<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--4-col-tablet mdl-cell mdl-cell--2-col-phone mdl-cell--middle">
										<div class=hb-product-details__meta>
											<span>Category: 
                                                <a href=shop rel=tag>{{ $categorie->nom }}</a>
                                            </span> 
											<span>Tags: 
                                                <a href=shop rel=tag>{{ $categorie->nom }}</a>, 
                                                <a href=shop rel=tag>{{ $categorie->sous_categorie }}</a>
                                            </span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--4-col-tablet mdl-cell mdl-cell--2-col-phone mdl-cell--middle mdl-typography--text-right">
										<button id=product-share class="mdl-button mdl-js-button mdl-button--icon"><i class=material-icons>share</i></button>
										<ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" for=product-share>
											<li class=mdl-menu__item>Share on facebook</li>
											<li class=mdl-menu__item>Share on twitter</li>
											<li class=mdl-menu__item>Share on google+</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class=hb-section>
					<div class=hb-section__content>
						<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
							<div class="mdl-cell mdl-cell--12-col">
								<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
									<div class="mdl-tabs__tab-bar hb-flex-justify-start">
										<a href=#product-description-tab class=mdl-tabs__tab>Description</a> 
										<a href=#additional-info-tab class=mdl-tabs__tab>Additional Information</a> 
										<a href=#product-reviews-tab class="mdl-tabs__tab is-active">Reviews ({{ count($avis) }})</a> 
										<a href=#custom-tab class=mdl-tabs__tab>Custom</a>
									</div>
									<div class="mdl-tabs__panel hb-padding-top-20 hb-padding-bottom-20" id=product-description-tab>
										<p style="word-wrap: break-word;">{{ $produit->description }}</p>
									</div>
									<div class="mdl-tabs__panel hb-padding-top-20 hb-padding-bottom-20" id=additional-info-tab>
										<table class="mdl-data-table mdl-js-data-table hb-full-width"><tbody><tr><td class=mdl-data-table__cell--non-numeric><strong>Size</strong></td><td>Small, Medium, Large, XXL</td></tr><tr><td class=mdl-data-table__cell--non-numeric><strong>Color</strong></td><td>Blue, Red, Green</td></tr></tbody></table>
									</div>
									<div class="mdl-tabs__panel hb-padding-top-20 hb-padding-bottom-20 is-active" id=product-reviews-tab>
										<div class=mdl-grid>
											<div class="mdl-cell mdl-cell--6-col">
												<h4 class="mdl-typography--title hb-margin-top-0 hb-margin-bottom-20">{{ count($avis) }} Of Reviews for {{ $produit->nom_produit }}</h4>
												<ul class="hb-list hb-list--full-width">
													@foreach($avis as $a)
													<li class="hb-list__item hb-list__item--top">
														<a href=# class=hb-list__icon>
															<img src="{{ asset($a->pdp_src) }}" alt=image class=hb-make-round>
														</a>
														<div class=hb-list__item-text>
															<div href=# class=hb-list__title>
																	@foreach($users as $user)
																		@if($user->id == $a->id_utilisateur)
																			<a href=#>{{ $user->name }}, {{ $a->created_at }}</a>
																		@endif
																	@endforeach
																<div class="hb-rating hb-rating--medium" title="Rated 4.00 out of 5">
																	<span style="width:{{ $a->note }}%"><strong class=hb-rating__stars>{{ $a->note }}</strong> out of 5</span>
																</div>
															</div>
															<span class=hb-list__subtitle>{{ $a->message }}</span>
														</div>
													</li>
													@endforeach
												</ul>
											</div>
											<div class="mdl-cell mdl-cell--6-col">
												<h4 class="mdl-typography--title hb-margin-top-0 hb-margin-bottom-20">Add a review</h4>
												<p>We would love to hear from you, feel free to leave your review.</p>
												<form  method="POST" action="{{ url('/rating', $produit->id) }}">
													{{ csrf_field() }}
													<p>Your rating:</p>
													<i class="fa fa-star"></i>
													<input name="note" type="number" min="0" max="5" >
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width mdl-textfield--floating-label">
														<textarea name="message" class=mdl-textfield__input type=text rows=4 id=message></textarea> 
														<label class=mdl-textfield__label for=message>Add your review here...</label>
													</div>
													<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add Review</button>
												</form>
											</div>
										</div>
									</div>
									<div class="mdl-tabs__panel hb-padding-top-20 hb-padding-bottom-20" id=custom-tab>
										<div class=mdl-grid>
											<div class="mdl-cell mdl-cell--12-col">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos repellat sequi modi consequuntur eaque accusamus excepturi deserunt quaerat, ullam ea amet corrupti aliquam voluptatibus, magni est, qui. Aspernatur, reprehenderit rem.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=hb-section>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--12-col">
									<h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Related Products</h2>
									<div class="hb-divider hb-divider--center"><div class=hb-divider__border></div></div>
								</div>
							</div>
							<div class="mdl-grid mdl-grid--no-fullwidth">
							@foreach($relatedproduits as $produit)
								<div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone hb-margin-bottom-40 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
									<div class="mdl-card mdl-shadow--2dp hb-card-product" style="width:100%;height100%">
										<div class="mdl-card__media hb-card-product__media">
											<a href="{{ url('/single-product', $produit->id) }}">
												@php
													$test = 0;
												@endphp
												@foreach($allimages as $image)
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
													<a href="single-product" class="mdl-typography--font-light">{{ $produit->nom_produit }}</a>
												</h3>
												<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
													<a href="shop" rel="tag">{{ $produit->nom }}</a>, 
													<a href=shop rel=tag>{{ $produit->sous_categorie }}</a>
												</span>
												<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
													<span style="width:80%">
													<strong class="hb-rating__stars">4.00</strong> out of 5</span>
												</div>
											</div>
											@if($produit->nbr_stock == 0)
											<div class="hb-card-product__badge hb-product-badge">Epuise</div>
											@endif
										</div>
										<div class="mdl-card__actions hb-card-product-actions">
											<strong class="mdl-typography--headline hb-product-price">
												<ins><span>{{ $produit->prix }} $</span></ins>
											</strong>
											<button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
												<i class="material-icons">add_shopping_cart</i>
											</button>
										</div>
									</div>
								</div>
							@endforeach
                            </div>
                        </div>
                    </div>
                    <div class=hb-section>
                        <div class=hb-section__content>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                    <div class=hb-background-parallax>
                                        <img src="{{ asset('images/backgrounds/bg33-notinclude.jpg') }}" alt="section background">
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"></div>
                                    <div class="mdl-cell mdl-cell--5-col mdl-cell--middle hb-color-light mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                        <h2 class="hb-bigtext hb-margin-top-100">
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-thin hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>Winter Sales</span> 
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-medium hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>Buy 2 get 1 free</span>
                                        </h2>
                                        <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised hb-margin-bottom-100 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s href=shop>VIEW ALL PRODUCTS</a>
                                    </div>
                                    <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>
                                </div>
                                <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                    <div class=hb-background-parallax>
                                        <img src="{{ asset('images/backgrounds/bg31-notinclude.jpg') }}" alt="section background">
                                    </div>
                                    <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"></div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--middle hb-color-light mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                        <h3 class="hb-margin-top-150 mdl-typography--text-uppercase mdl-typography--font-thin hb-color-light hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>New Collection</h3>
                                        <p class="hb-margin-bottom-150 hb-color-light hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit asperiores, reprehenderit id! Molestias voluptas aspernatur illum dolores saepe, possimus quas expedita vero, voluptatibus cupiditate quasi sed eligendi, facilis minus eius.</p>
                                    </div>
                                    <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('/include/footer')
                </div>
			</main>
            </div>
		@include('/include/sidecart')
	</body>
</html>