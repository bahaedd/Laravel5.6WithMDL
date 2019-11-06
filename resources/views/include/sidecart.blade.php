<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--hbshop mdl-button--colored hb-button-hbshop hb-js-button-shopping-cart mdl-badge hb-button-hbshop__badge" data-badge={{ Cart::count() }}>
            <i class=material-icons>shopping_cart</i>
        </button>
        <div class="mdl-layout__drawer mdl-layout__drawer--right hb-product-cart">
            <span class=mdl-layout-title>Cart</span>
            <div class=hb-layout__divider></div>
            <div class=hb-product-cart__body>
                <ul class=hb-list>
					@foreach(Cart::content() as $item)
                    <li class=hb-list__item>
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
                        <div class=hb-list__item-text>
                            <a href="{{ url('single-product', $item->id) }}" class=hb-list__title>{{ $item->name }}</a> 
                            <span class=hb-list__subtitle>${{ $item->price }}</span>
                        </div>
                        <div class=hb-list__item-secondary-action>
                            <a href="{{ url('cart', $item->rowId) }}" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                <i class=material-icons>close</i>
                            </a>
                        </div>
                    </li>
					@endforeach
				</ul>
				<div class="hb-product-cart__actions">
					<div class="hb-layout__divider"></div>
					<h3 class="hb-product-cart__total">Subtotal: ${{ Cart::subtotal() }}</h3>
					<div class="hb-layout__divider"></div>
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                            <a href=cart class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent hb-full-width">View Cart</a>
                        </div>
						<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                            <a href=checkout class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary hb-full-width">Checkout</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
<div id="side-cart-obfuscator" class="mdl-layout__obfuscator"></div>
		<script src="{{ asset('js/theme.min.js') }}"></script>