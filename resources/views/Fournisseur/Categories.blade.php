<!doctype html>
	<html lang>
		@include('/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/include/headerUser')
			     @include('/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section>
                        
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-0"></div>
									<div class="mdl-grid mdl-grid--no-fullwidth hb-margin-top-40">
								<div class="mdl-cell mdl-cell--12-col">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Categories</h2>                            
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Sous-categories</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cloths</td>
                                                <td>t-shirts<br>
                                                    Shirts<br>
                                                    WinterClothes<br>
                                                </td>
                                                <td>
                                                    <a href="#" class="mdl-link">Modify</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Informatique</td>
                                                <td>PC<br>
                                                    Phones<br>
                                                    Tablette<br>
                                                </td>
                                                   
                                                
                                        <td>
                                                    <a href="#" class="mdl-link">Modify</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr><td>Multimedia</td>
                                                <td>Television</td>
                                        <td>
                                                    <a href="#" class="mdl-link">Modify</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Accessoires</td>
                                                <td>Accessoire
                                                
                                                </td>
                                         <td>
                                                    <a href="#" class="mdl-link">Modify</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                     
									</table>
                                    <div class="mdl-cell mdl-cell--24-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-0 hb-margin-top-20">
                                      <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="AddProduct">ADD</a>
                                    </div> 
								</div>
							</div>
                        		
					</div>
					
					@include('/include/footerUser')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>