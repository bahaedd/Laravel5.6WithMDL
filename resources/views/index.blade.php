<!doctype html>
 <html lang>
     @include('/include/head')
    <body>
		<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
			@include('/include/header')
			@include('/include/sidebar')
			<main class="mdl-layout__content">
				<div class="hb-section">
					<div class="hb-section__content">
						<div class="rev_slider_wrapper fullwidthbanner-container">
							<div id="homepage-slider" class="rev_slider">
								<ul>
									<li data-title="Slide 1" data-index="slide-1" data-thumb="{{ asset('images/sliders/homepage/slide-1-320x200.jpg') }}">
										<img src="{{ asset('images/sliders/homepage/slide-1-full.jpg') }}" alt="Slide 1" data-bgposition="center top" data-kenburns=on data-duration=7000 data-scalestart=100 data-scaleend=110 data-offsetstart="-50 100" data-offsetend="100 -150" data-bgfit=105 data-bgfitend=100 data-bgpositionend="center bottom">
										<div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin hb-color-light" data-x=left data-hoffset=500 data-y=top data-voffset=250 data-transform_in=o:0;e:Power4.easeIn; data-transform_idle=o:1;s:1000; data-transform_out=o:0;s:500;e:Power4.easeOut; data-start=1000>C'est H&bShop!</div>
										<div class="tp-caption tp-resizeme" data-x=left data-y=top data-hoffset=500 data-voffset=335 data-start=1500 data-transform_in=o:0;e:Power1.easeIn; data-transform_idle=o:1;s:500; data-transform_out=o:0;s:500;e:Power4.easeOut; style="height: 1px; width: 200px;background: #fff;"></div>
										<div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light hb-color-light" data-x=left data-y=top data-hoffset=500 data-voffset=360 data-start=2000 data-transform_in=o:0;e:Power4.easeIn; data-transform_idle=o:1;s:600; data-transform_out=o:0;s:600;e:Power1.easeOut;>
											<p style="font-size: 21px; line-height: 1.5">
												All the latest trends and labels are available.<br />Get ready for Autumn with our latest range of stylish clothing.<br />
												<strong>Free Delivery</strong> on all items over $50<br />
											</p>
										</div>
										<div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--colored" data-x=left data-y=top data-hoffset=500 data-voffset=480 data-start=3000 data-transform_in=o:0;y:100; data-transform_idle=x:0;o:1;s:600; data-transform_out=o:0;s:800;e:Power1.easeOut;>
											<a href=# style="color: #fff;">Shop Womens</a>
										</div>
									</li>
									<li data-title="Slide 2" data-index="slide-2" data-thumb="{{ asset('images/sliders/homepage/slide-2-320x200.jpg') }}">
										<img src="{{ asset('images/sliders/homepage/slide-2-full.jpg') }}" alt="slide 2" data-bgposition="left top" data-kenburns=on data-duration=7000 data-scalestart=100 data-scaleend=115 data-offsetstart="250 100" data-offsetend="-150 -50" data-ease=Linear.easeNone data-bgfit=110 data-bgfitend=100 data-bgpositionend="left bottom">
										<div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin hb-color-light" data-x=left data-y=top data-hoffset=720 data-voffset=250 data-start=1000 data-transform_in=o:0; data-transform_idle=o:1;s:1000; data-transform_out=o:0;s:600;>SUMMER SALES</div>
										<div class="tp-caption tp-resizeme" data-x=left data-y=top data-hoffset=720 data-voffset=335 data-start=1000 data-transform_in=o:0; data-transform_idle=o:1;s:800; data-transform_out=o:0;s:600; style="height: 1px; width: 100px;background: #fff;"></div>
										<div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light hb-color-light" data-x=left data-y=top data-voffset=360 data-hoffset=720 data-start=2000 data-transform_in=o:0; data-transform_idle=o:1;s:800; data-transform_out=o:0;s:600;>
											<p style="font-size: 21px; line-height: 1.5">Stand out styles from all<br>your favourite brands.<br>Share your look with #hbshop<br /></p>
										</div>
										<div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--accent" data-x=left data-y=top data-hoffset=720 data-voffset=480 data-start=3000 data-transform_in=o:0;y:100; data-transform_idle=x:0;o:1;s:600; data-transform_out=o:0;s:600;>
											<a href=# style="color: #fff;">Show now</a>
										</div>
									</li>
									<li data-title="Slide 3" data-index="slide-3" data-thumb="{{ asset('images/sliders/homepage/slide-3-320x200.jpg') }}">
										<img src="{{ asset('images/sliders/homepage/slide-3-full.jpg') }}" alt="Slide 3" data-bgposition="left center" data-kenburns=on data-duration=7000 data-scalestart=100 data-scaleend=115 data-offsetstart="-150 -200" data-offsetend="350 -450" data-ease=Linear.easeNone data-bgfit=110 data-bgfitend=100 data-bgpositionend="left center">
										<div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin" data-x=left data-y=top data-hoffset=550 data-voffset=250 data-start=1000 data-transform_in=o:0; data-transform_idle=o:1;s:1000; data-transform_out=o:0;s:600;>CRAZY SALE!</div>
										<div class="tp-caption tp-resizeme" data-x=left data-y=top data-hoffset=550 data-voffset=335 data-start=1500 data-transform_in=o:0; data-transform_idle=o:1;s:800; data-transform_out=o:0;s:600; style="height: 1px; width: 200px;background: #000;"></div>
										<div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light" data-x=left data-y=top data-hoffset=550 data-voffset=360 data-start=2000 data-transform_in=o:0; data-transform_idle=o:1;s:800; data-transform_out=o:0;s:600;>
											<p style="font-size: 21px; line-height: 1.5">
												Shop from over 850 of the best brands<br />including our own label.<br />Plus, get your daily fix of the freshest style,<br />celebrity and music news.
											</p>
										</div>
										<div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--colored" data-x=left data-y=top data-hoffset=550 data-voffset=515 data-start=3000 data-transform_in=o:0;y:100; data-transform_idle=x:0;o:1;s:600; data-transform_out=o:0;s:600;>
											<a href=# style="color: #fff;">Shop Womens</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="hb-section">
					<div class="hb-section__content">
						<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-10">
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
								<a href=#>
									<img src="{{ asset('images/banners/banner-01-medium-notinclude.jpg') }}" class="hb-image-responsive" alt="Banner 1">
								</a>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
								<a href=#>
									<img src="{{ asset('images/banners/banner-02-medium-notinclude.jpg') }}" class="hb-image-responsive" alt="Banner 2">
								</a>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone hb-animation mdl-cell--hide-tablet" data-os-animation=fadeIn data-os-animation-delay=0.3s>
								<a href=#>
									<img src="{{ asset('images/banners/banner-03-medium-notinclude.jpg') }}" class=hb-image-responsive alt="Banner 3">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="hb-section">
					<div class="hb-section__content">
						<div class="mdl-grid mdl-grid--no-fullwidth">
							<div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
								<h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Latest Products</h2>
								<div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
									<div class="hb-divider__border"></div>
								</div>
							</div>
						</div>
						<div class="mdl-grid mdl-grid--no-fullwidth">
							
						@foreach($latestproduct as $produit)
							<div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone hb-margin-bottom-40 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
								<div class="mdl-card mdl-shadow--2dp hb-card-product" style="width:100%;height100%">
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
												<a href="single-product" class="mdl-typography--font-light">{{ $produit->nom_produit }}</a>
											</h3>
											<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
												<a href="shop" rel="tag">{{ $produit->nom }}</a>, 
												<a href=shop rel=tag>{{ $produit->sous_categorie }}</a>
											</span>
											<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 2.00 out of 5">
												<span style="width:80%">
												<strong class="hb-rating__stars">2.00</strong> out of 5</span>
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
					</div>
				</div>
				<div class="hb-section">
					<div class="hb-section__content">
						<div class="mdl-grid mdl-grid--no-spacing">
							<div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
								<div class="hb-background-parallax">
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
				<div class="hb-section hb-margin-bottom-40">
					<div class="hb-section__content">
						<div class="mdl-grid mdl-grid--no-fullwidth">
							<div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
								<h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Chepeast Products
                                </h2>
								<div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
									<div class="hb-divider__border"></div>
								</div>
							</div>
						</div>
						<div class="mdl-grid mdl-grid--no-fullwidth">
							@foreach($cheap as $cheapproduit)
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
								<div class="mdl-card mdl-shadow--2dp hb-card-product">
									<div class="mdl-card__media hb-card-product__media">
										<a href="{{ url('/single-product', $cheapproduit->id) }}">
											@php
												$test = 0;
											@endphp
											@foreach($images as $image)
												@if($test != 2 )
													@if($image->id_produit == $cheapproduit->id)
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
												<a href=single-product class=mdl-typography--font-light>{{ $cheapproduit->nom_produit }}</a>
											</h3>
											<span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
												<a href=shop rel=tag>{{ $cheapproduit->nom }}</a>, <a href=shop rel=tag>{{ $cheapproduit->sous_categorie }}</a>
											</span>
											<div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
												<span style=width:80%><strong class=hb-rating__stars>4.00</strong> out of 5</span>
											</div>
										</div>
										@if($cheapproduit->nbr_stock == 0)
										<div class="hb-card-product__badge hb-product-badge">Epuise</div>
										@endif
									</div>
									<div class="mdl-card__actions hb-card-product-actions">
										<strong class="mdl-typography--headline hb-product-price"><ins><span>{{ $cheapproduit->prix }}$</span></ins></strong> 
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
                    </div>
                </div>
                <div class=hb-section>
                    <div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
                        <img src="{{ asset('images/backgrounds/bg9-notinclude.jpg') }}" alt="section background">
                    </div>
                    <div class=hb-section__overlay>
                    </div>
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
                                    </div></div><div class="mdl-cell mdl-cell--6-col mdl-cell--middle">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10">Sign Up
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=hb-section>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col">
                                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>Featured Product
                                </h2>
                                <div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <div class=hb-divider__border></div>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <img class=hb-image-responsive src="{{ asset('images/banners/banner-08-notinclude.png') }}" alt="Featured Product">
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                <h2 class="mdl-typography--headline mdl-typography--font-light">Lady In Red Night Shoes</h2>
                                <p class="mdl-typography--title mdl-typography--font-light hb-opacity-50 hb-typography-line-height-normal hb-margin-bottom-20">Material Design Lite lets you add a Material Design look and feel to your websites. It doesn’t rely on any JavaScript frameworks and aims to optimize for cross-device use, gracefully degrade in older browsers, and offer an experience that is immediately accessible</p>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=hb-section>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-spacing">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <div class=google-map id=map style=height:450px>
                                </div>
                            </div>
                            <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone hb-animation hb-color-accent" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>Store Locator</h2>
                                    <div class="hb-divider hb-divider--center">
                                        <div class=hb-divider__border></div>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
                                <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet hb-animation mdl-typography--text-center" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <h4 class=mdl-typography--title>hbshop Shop</h4>
                                    <p>Birmingham Bullring</p>
                                    <p>MSU 8-9,Levels 7 &amp; 9</p>
                                    <p>Maroc 8555</p>
                                    <p>065989595959</p>
                                </div>
                                <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet hb-animation mdl-typography--text-center" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <h4 class=mdl-typography--title>Hours</h4>
                                    <p>Mon 9:30AM-8:00PM</p>
                                    <p>Tue 9:30AM-8:00PM</p>
                                    <p>Wed 9:30AM-8:00PM</p>
                                    <p>Thu 9:30AM-8:00PM</p>
                                    <p>Fri 9:30AM-8:00PM</p>
                                </div>
                                <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=hb-section>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col">
                                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20 hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>Featured Products</h2>
                                <div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                    <div class=hb-divider__border></div>
                                </div>
                            </div>
                        </div>
                        <div class=mdl-grid>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href=single-product>
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-10-a-medium-small-notinclude.jpg') }}"> <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-10-b-medium-small-notinclude.jpg') }}"></a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>White Hat</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=shop rel=tag>Women</a>, 
                                                <a href=shop rel=tag>Hats</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%><strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                        <div class="hb-card-product__badge hb-product-badge">Sale</div>
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <del><span>£42</span></del>
                                            <ins><span>£16</span></ins>
                                        </strong> 
                                        <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class=material-icons>add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href=single-product>
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-1-a-medium-small-notinclude.jpg') }}"> 
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-1-b-medium-small-notinclude.jpg') }}">
                                        </a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>White Jacket</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=shop rel=tag>Women</a>, 
                                                <a href=shop rel=tag>Clothes</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%>
                                                    <strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <ins><span>£156</span></ins>
                                        </strong> 
                                        <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class=material-icons>add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.3s><div class="mdl-card mdl-shadow--2dp hb-card-product">
                                <div class="mdl-card__media hb-card-product__media">
                                    <a href=single-product>
                                        <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-6-a-medium-small-notinclude.jpg') }}"> 
                                        <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-6-b-medium-small-notinclude.jpg') }}">
                                    </a>
                                    <div class="mdl-card__title hb-card-product__title">
                                        <h3 class="mdl-card__title-text hb-card-product__title-text">
                                            <a href=single-product class=mdl-typography--font-light>Black Top</a>
                                        </h3>
                                        <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                            <a href=shop rel=tag>Women</a>, 
                                            <a href=shop rel=tag>Tops</a>
                                        </span>
                                        <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                            <span style=width:80%>
                                                <strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                        </div>
                                    </div>
                                    <div class="hb-card-product__badge hb-product-badge">Sale</div>
                                </div>
                                <div class="mdl-card__actions hb-card-product-actions">
                                    <strong class="mdl-typography--headline hb-product-price">
                                        <del><span>£54</span></del>
                                        <ins><span>£26</span></ins>
                                    </strong> 
                                    <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class=material-icons>add_shopping_cart</i>
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.4s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href=single-product>
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-7-a-medium-small-notinclude.jpg') }}"> 
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-7-b-medium-small-notinclude.jpg') }}">
                                        </a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>Dress</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=shop rel=tag>Women</a>, 
                                                <a href=shop rel=tag>Clothes</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%>
                                                    <strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                        <div class="hb-card-product__badge hb-product-badge">Sale</div>
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <del><span>£84</span></del>
                                            <ins><span>£72</span></ins>
                                        </strong> 
                                        <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class=material-icons>add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.5s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href=single-product>
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-14-a-medium-small-notinclude.jpg') }}"> 
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-14-b-medium-small-notinclude.jpg') }}">
                                        </a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>White Bag</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=shop rel=tag>Women</a>, 
                                                <a href=shop rel=tag>Bags</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%>
                                                    <strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <ins><span>£79</span></ins>
                                        </strong> 
                                        <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class=material-icons>add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.6s>
                                <div class="mdl-card mdl-shadow--2dp hb-card-product">
                                    <div class="mdl-card__media hb-card-product__media">
                                        <a href=single-product>
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-19-a-medium-small-notinclude.jpg') }}"> 
                                            <img alt="some product" class=hb-card-product__image src="{{ asset('images/products/product-19-b-medium-small-notinclude.jpg') }}">
                                        </a>
                                        <div class="mdl-card__title hb-card-product__title">
                                            <h3 class="mdl-card__title-text hb-card-product__title-text">
                                                <a href=single-product class=mdl-typography--font-light>Fashion Hat</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-product__tags">
                                                <a href=shop rel=tag>Women</a>, 
                                                <a href=shop rel=tag>Hats</a>
                                            </span>
                                            <div class="hb-rating hb-card-product__rating hb-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style=width:80%>
                                                    <strong class=hb-rating__stars>4.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                        <div class="hb-card-product__badge hb-product-badge">Sale</div>
                                    </div>
                                    <div class="mdl-card__actions hb-card-product-actions">
                                        <strong class="mdl-typography--headline hb-product-price">
                                            <del><span>£85</span></del>
                                            <ins><span>£49</span></ins>
                                        </strong> 
                                        <button class="hb-button-add-product hb-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class=material-icons>add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hb-section hb-color-primary hb-margin-top-40">
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40 hb-margin-bottom-40">
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <i class="material-icons mdl-36 hb-opacity-70">flight</i>
                                <h4 class="mdl-typography--title mdl-typography--font-regular">Fast Delivery</h4>
                                <p class=mdl-typography--font-light>Material Design Lite lets you add a Material Design look and feel to your websites. It doesn’t rely on any JavaScript frameworks and aims to optimize for cross-device use, gracefully degrade in older browsers, and offer an experience that is immediately accessible.</p>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                <i class="material-icons mdl-36 hb-opacity-70">shopping_cart</i>
                                <h4 class="mdl-typography--title mdl-typography--font-regular">Secure Checkout</h4>
                                <p class=mdl-typography--font-light>Surfaces and edges of the material provide visual cues that are grounded in reality. The use of familiar tactile attributes helps users quickly understand affordances. Yet the flexibility of the material creates new affordances that supercede those in the physical world, without breaking the rules.</p>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.3s>
                                <i class="material-icons mdl-36 hb-opacity-70">loyalty</i>
                                <h4 class="mdl-typography--title mdl-typography--font-regular">Free Returns</h4>
                                <p class=mdl-typography--font-light>These elements do far more than please the eye. They create hierarchy, meaning, and focus. Deliberate color choices, edge-to-edge imagery, large-scale typography, and intentional white space create a bold and graphic interface that immerse the user in the experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hb-section hb-margin-bottom-40">
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Reviews</h2>
                                <div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <div class=hb-divider__border></div>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-4-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>Motion respects and reinforces the user as the prime mover. Primary user actions are inflection points that initiate motion, transforming the whole design.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Ann Nickolson</a> 
                                            <span>Senior, Amazon.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s style=background-color:#ab46bc;>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-5-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>Surfaces and edges of the material provide visual cues that are grounded in reality.The use of familiar tactile attributes helps users quickly understand affordances.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Jack Samuel</a> 
                                            <span>CEO, Amazon.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.3s style=background-color:#7e57c2;>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-6-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>Motion is meaningful and appropriate, serving to focus attention and maintain continuity. Feedback is subtle yet clear. Transitions are efﬁcient yet coherent.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Christofer Doe</a> 
                                            <span>Senior, Amazon.comfat</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s style=background-color:#e65100;>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-3-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>The foundational elements of print-based design—typography, grids, space, scale, color, and use of imagery—guide visual treatments.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Kate Jettings</a> 
                                            <span>CEO, Amazon.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s style=background-color:#fcc02c;>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-1-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>Yet the flexibility of the material creates new affordances that supercede those in the physical world, without breaking the rules of physics.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Jack Samuel</a> 
                                            <span>CEO, Amazon.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp hb-card-testimonial hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.3s style=background-color:#c0ca33;>
                                    <div class="mdl-card__media hb-card-testimonial__media">
                                        <div class=hb-card-testimonial__avatar>
                                            <img src="{{ asset('images/avatars/avatar-2-notinclude.jpg') }}" alt=avatar>
                                        </div>
                                        <div class=hb-card-testimonial__text>The fundamentals of light, surface, and movement are key to conveying how objects move, interact, and exist in space and in relation to each other.</div>
                                        <div class="mdl-card__title hb-card-testimonial__title">
                                            <a href=post>Christofer Doe</a> 
                                            <span>Senior, Amazon.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=hb-section>
                    <div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
                        <img src="{{ asset('images/backgrounds/bg8-notinclude.jpg') }}" alt="section background"></div>
                    <div class=hb-section__overlay></div>
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <h2 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-80 hb-margin-bottom-20 mdl-typography--text-center">Get 10% off on your first order</h2>
                            </div>
                        </div>
                        <form action=# class="hb-margin-bottom-80 hb-color-light mdl-typography--text-center">
                            <div class="mdl-grid mdl-grid--no-fullwidth">
                                <div class="mdl-cell mdl-cell--12-col mdl-cell--middle mdl-typography--text-center">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <label class=mdl-textfield__label for=discount-email>Your email</label> 
                                        <input class=mdl-textfield__input type=text id=discount-email>
                                    </div>
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10 hb-margin-left-30 hb-margin-right-30">Get a discount</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="hb-section hb-margin-bottom-40">
                    <div class=hb-section__content>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light hb-margin-top-40 hb-margin-bottom-20">Latest News</h2>
                                <div class="hb-divider hb-divider--center hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <div class=hb-divider__border></div>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                                <div class="mdl-card mdl-shadow--2dp hb-card-post hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.1s>
                                    <div class="mdl-card__media hb-card-post__media">
                                        <img alt="some post" class=hb-card-post__image src="{{ asset('images/posts/post1-medium-notinclude.jpg') }}">
                                        <div class="mdl-card__title mdl-card__post-title hb-card-post__title">
                                            <h2 class="mdl-card__title-text hb-card-post__title-text">
                                                <a href=post>New Summer Collection</a>
                                            </h2>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-post__info">
                                                <a href=posts>Morris Onions</a> August 15, 2015
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                                <div class="mdl-card mdl-shadow--2dp hb-card-post hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.2s>
                                    <div class="mdl-card__media hb-card-post__media">
                                        <img alt="some post" class=hb-card-post__image src="{{ asset('images/posts/post2-medium-notinclude.jpg') }}">
                                        <div class="mdl-card__title mdl-card__post-title hb-card-post__title">
                                            <h2 class="mdl-card__title-text hb-card-post__title-text">
                                                <a href=post>Vintage Look is back</a>
                                            </h2>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-post__info">
                                                <a href=posts>Morris Onions</a> August 25, 2015
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                                <div class="mdl-card mdl-shadow--2dp hb-card-post hb-animation" data-os-animation=fadeIn data-os-animation-delay=0.3s>
                                    <div class="mdl-card__media hb-card-post__media">
                                        <img alt="some post" class=hb-card-post__image src="{{ asset('images/posts/post3-medium-notinclude.jpg') }}">
                                        <div class="mdl-card__title mdl-card__post-title hb-card-post__title">
                                            <h2 class="mdl-card__title-text hb-card-post__title-text">
                                                <a href=post>Yellow, the new black</a>
                                            </h2>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold hb-card-post__info">
                                                <a href=posts>Mike Smith</a> September 14, 2015
                                            </span>
                                        </div>
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