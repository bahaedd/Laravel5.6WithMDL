<!doctype html>
	<html lang>
		@include('include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('include/header')
			     @include('include/sidebar')
				<main class=mdl-layout__content>
					<div class=hb-section>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Message Sender</h2>                            
									<div class="mdl-cell mdl-cell--12-col mdl-shadow--2dp" style=" border: 1px solid #EDEDED; border-radius:15px;">
										<div style="display:inline-block;margin:10px;">
											<h6 style="display:inline;margin-left:30px;">To : </h6>{{ $user->name }}
										</div>
										<div style="width:50%;margin-left:auto;margin-right:auto">
										<form method="post" action="{{ url('fournisseurmessage') }}">
											{{ csrf_field() }}
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
												<label class="mdl-textfield__label" for="message">Your message</label> 
												<textarea class="mdl-textfield__input" type="text" name="message" rows="10" id="message"></textarea>
												<input type="number" name="recepteur" value="{{ $user->id}}" hidden="true">
											</div>
											
										<div style="text-align:center; font-size:20px; margin:20px;">
											<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
												<i class="material-icons">reply</i>
											</button>
										</div>
										</form>
										</div>
									</div>
								</div>
							</div>
                        		
					</div>
				@include('/include/footer')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>