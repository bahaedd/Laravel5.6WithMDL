<!doctype html>
	<html lang>
		@include('Fournisseur/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('Fournisseur/include/headerFornisseur')
			     @include('Fournisseur/include/sidebarFornisseur')
				<main class=mdl-layout__content>
					<div class=hb-section>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Products</h2>                            
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                <th>Categorie</th>
                                                <th>Sous-categorie</th>
                                                <th>Nombre en stock</th>
                                                <th>Modify</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach($data as $produit)
                                            <tr>
                                                <td>{{ $produit->id }}</td>
                                                <td>{{ $produit->nom_produit }}</td>
                                                <td>{{ $produit->prix }}</td>
                                                <td>{{ $produit->nom }}</td>
                                                <td>{{ $produit->sous_categorie }}</td>
                                              	<td>{{ $produit->nbr_stock }}</td>
                                                <td>
													<a href="{{ route('productsFornisseur.edit',$produit->id) }}" class="mdl-link">
														<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">mode_edit</i>
														</button>
													</a>
                                                </td>
                                                <td>
													{{ Form::open(array('route' => array('productsFornisseur.destroy', $produit->id), 'method' => 'delete')) }}
														<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
															<i class="material-icons">delete</i>
														</button>
													{{ Form::close() }}
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
                                      <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="{{ url('AddProduct') }}">ADD</a>
                                    </div> 
								</div>
							</div>
					</div>
				</main>
					@include('Fournisseur/include/footerFornisseur')
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>