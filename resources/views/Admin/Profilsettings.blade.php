<!doctype html>
	<html lang>
		@include('/Admin/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/Admin/include/headerUser')
			     @include('/Admin/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Additional infos</h2>                            
									<div class="mdl-cell mdl-cell--12-col mdl-shadow--2dp" style=" border: 1px solid #EDEDED; border-radius:15px;">
										<div style="display:inline-block;margin:10px;">
										</div>
										<div style="width:50%;margin-left:auto;margin-right:auto">
											<p>(*) are requeired</p>
										<form role="form" method="POST" action="{{ url('/Profilsettings') }}" style="width:100%;"  enctype="multipart/form-data">
												{{ csrf_field() }}
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="telephone" name="telephone" required autofocus>
														<label class="mdl-textfield__label" for="nom">Telephone *</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="adress" name="adress"  required>
														<label class="mdl-textfield__label" for="email">Adress *</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
														<input class="mdl-textfield__input" placeholder="Votre photo de profil" type="text" id="uploadFile" readonly/>
														<label class="input-custom-file mdl-card-button-right mdl-button mdl-js-button mdl-button--colored mdl-button--fab mdl-button--mini-fab" data-upgraded=",MaterialButton" style="background: #ff4081;color: #fff;right:0;margin-bottom:0px;" id="cover">
                        									<i class="material-icons">attach_file</i><input type="file" id="uploadBtn" name="pdp" accept="image/jpeg">
														</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
														<input class="mdl-textfield__input" placeholder="Votre photo de couverture" type="text" id="uploadfile" readonly/>
														<label class="input-custom-file mdl-card-button-right mdl-button mdl-js-button mdl-button--colored mdl-button--fab mdl-button--mini-fab" data-upgraded=",MaterialButton" style="background: #ff4081;color: #fff;right:0;margin-bottom:0px;" id="cover">
                        									<i class="material-icons">attach_file</i><input type="file" id="uploadbtn" name="cover" accept="image/jpeg">
														</label>
													</div>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
													<label class="mdl-textfield__label" for="bio">Your Bio</label> 
													<textarea class="mdl-textfield__input" type="text" name="bio" rows="10" id="bio"></textarea>
												</div>
												<p>Payment Methodes</p>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="paypal" name="paypal">
														<label class="mdl-textfield__label" for="email">Paypal email</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-selectfield mdl-js-selectfield" tabindex=-1>
														<select name="carte" id="carte" class=mdl-selectfield__select>
															<option value=visa>Visa</option>
															<option value=mastercard>MasterCard</option>
														</select>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="number" name="number">
														<label class="mdl-textfield__label" for="number">Carte number</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="CVV" name="CVV">
														<label class="mdl-textfield__label" for="email">CVV</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<div class="mdl-textfield mdl-js-textfield">
														<input class="mdl-textfield__input" type="text" id="dat" name="dat">
														<label class="mdl-textfield__label" for="dat">mm/yyyy</label>
													</div>
												</div>
												<div class="mdl-cell mdl-cell-12-col" style="width:100%">
													<button type=submit class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent hb-margin-bottom-10 hb-margin-top-10">Update</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
                        		
					</div>
					
				@include('/Admin/include/footerUser')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>