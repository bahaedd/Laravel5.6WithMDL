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
                            	<h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Users</h2>                            
								<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
									<thead>
										<tr>
                                        	<th>Nom Complet</th>
                                        	<th>Role</th>
                                        	<th>Email</th>
                                        	<th>Date de creation</th>
                                        	<th>Delete</th>
                                    	</tr>
                                	</thead>
                                    <tbody>
										@foreach($data as $user)
                                    	<tr>
                                        	<td>{{ $user->name }}</td>
                                        	<td>{{ $user->libelle }}</td>
                                        	<td>{{ $user->email }}</td>
                                        	<td>{{ $user->created_at }}</td>
                                        	<td>
												<a href="{{ action('UtilisateursController@destroy',$user->id) }}">
													<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">delete</i>
													</button>
												</a>
											</td>
                                    	</tr>
										@endforeach
                                	</tbody>
								</table>
								
									<div class=mdl-grid>
                                     <div class="mdl-cell mdl-cell--12-col">
										{{ $data->render() }}
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