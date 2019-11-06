<!doctype html>
	<html lang>
		@include('/Admin/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/Admin/include/headerUser')
			     @include('/Admin/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section></div>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Products</h2>                            
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Catgory</th>
                                                <th>sous_Catgory</th>
                                                <th>Price</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach($data as $produit)
                                            <tr>
                                                <td>{{ $produit->nom_produit }}</td>
                                                <td>{{ $produit->nom }}</td>
                                                <td>{{ $produit->sous_categorie }}</td>
                                                <td>{{ $produit->prix }}</td>
                                                <td>
													<a href="{{ route('productsadmin.admindestroy',$produit->id) }}" class="mdl-link">
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
                            <div class="mdl-cell mdl-cell--24-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-0 hb-margin-top-20">
                            	<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="#"><i class="material-icons">add</i></a>
                            </div>
								</div>
							</div>
				</main>
				@include('/Admin/include/footerUser')
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>