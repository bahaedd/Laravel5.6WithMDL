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
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Message Viewer</h2>                            
									<div class="mdl-cell mdl-cell--12-col mdl-shadow--2dp" style=" border: 1px solid #EDEDED; border-radius:15px;">
										<div style="display:inline-block;margin:10px;">
											<h6 style="display:inline">Name : </h6>{{ $message->name }}
											<h6 style="display:inline;margin-left:30px;">Email : </h6>{{ $message->email }}
										</div>
										<div style="text-align:center;margin:30px;white-space: pre-wrap;word-wrap: break-word;">
												<p>{{ $message->message }}</p>
										</div>
										<div style="text-align:center; font-size:20px; margin:20px;">
											<div style="display:inline-block">
												{{ Form::open(array('route' => array('Messages.reply', $message->email), 'method' => 'reply')) }}
															<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
																<i class="material-icons">reply</i>
															</button>
												{{ Form::close() }}
											</div>
											<div style="display:inline-block">
												{{ Form::open(array('route' => array('Messages.destroy', $message->id), 'method' => 'delete')) }}
													<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
														<i class="material-icons">delete</i>
													</button>
												{{ Form::close() }}
											</div>
										</div>
									</div>
								</div>
							</div>
                        		
					</div>
				</main>
				@include('/Admin/include/footerUser')
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>