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
							<img src="{{ asset('images/backgrounds/bg24-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-100 hb-margin-bottom-100">Cart</h1>
							</div>
						</div>
					</div>
					<div class=hb-section>
						<div class=hb-section__content>
							<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										<thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach($all as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{ url('cart', $item->rowId) }}" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                                        <i class=material-icons>close</i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('single-product', $item->id) }}">
														@php
														$test = 0;
														@endphp
														@foreach($images as $image)
														@if($test == 0)
														@if($image->id_produit == $item->id)
														@php
														$test++;
														@endphp
                                                        <img width=60 height=60 src="{{ asset($image->img_src) }}" alt=image>
														@endif
														@endif
														@endforeach
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('single-product', $item->id) }}">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <div class=hb-quantity>
                                                        <input type=button value=->
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input type=number step=1 min=0 name=cart value="{{ $item->qty }}" title=Qty class=mdl-textfield__input id=q1> 
                                                            <label class=mdl-textfield__label for=q1></label>
                                                        </div>
                                                        <input type=button value=+>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>{{ $item->price * $item->qty }}</strong>
                                                </td>
                                            </tr>
											@endforeach
                                        </tbody>
									</table>
								</div>
							</div>
							<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-bottom-20">
								<div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
										<input class=mdl-textfield__input type=text id=coupon> 
										<label class=mdl-textfield__label for=coupon>Coupon Code</label>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--2-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-full-width">Apply Coupon</button>
								</div>
								<div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle"></div>
								<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
									<a href="{{ url('cart') }}"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-full-width">Update Cart</button></a>
								</div>
								<div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary hb-full-width">Checkout</button>
								</div>
							</div>
							<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-bottom-40">
								<div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle"></div>
								<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										<thead>
                                            <tr>
                                                <th colspan=2>Cart Totals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=mdl-data-table__cell--non-numeric>Cart Subtotal</td>
                                                <td>${{ Cart::subtotal() }}</td>
                                            </tr>
                                            <tr>
                                                <td class=mdl-data-table__cell--non-numeric>Shipping & Handling</td>
                                                <td>${{ Cart::tax() }}</td>
                                            </tr>
                                            <tr>
                                                <td class=mdl-data-table__cell--non-numeric>
                                                    <strong>Total</strong>
                                                </td>
                                                <td>
                                                    <strong>${{ Cart::total() }}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="hb-section">
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg17-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay"></div>
						<div class="hb-section__content">
							<div class="mdl-grid mdl-grid--no-fullwidth">
								<div class="mdl-cell mdl-cell--12-col">
									<h2 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-80 hb-margin-bottom-20">Never Miss An Offer</h2>
								</div>
							</div>
							<form action="#" class="hb-margin-bottom-80 hb-color-light">
								<div class="mdl-grid mdl-grid--no-fullwidth">
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class="mdl-textfield__label" for=signup-name>Your name</label> 
											<input class="mdl-textfield__input" type=text id=signup-name>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col">
										<div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
											<label class="mdl-textfield__label" for="signup-email">Your email</label> 
											<input class="mdl-textfield__input" type="text" id="signup-email">
										</div>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell--middle">
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10">
											Sign Up
										</button>
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