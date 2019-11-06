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
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline mdl-typography--font-light hb-margin-bottom-20 hb-margin-top-20">Clients</h2>                            
									<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <tr>
                                                <th>Nom Complet</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bahae ddine</td>
                                                <td>sihassi</td>
                                                <td>sihassi.bahaeddine@gmail.com</td>
                                             
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bahae ddine SIHASSI</td>
                                                <td>sihassi</td>
                                                 <td>sihassi.bahaeddine@gmail.com</td>
                                       
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr><td>Houssam SADIKI</td>
                                                <td>sadiki</td>
                                                <td>sadiki.houssam@gmail.com</td>
                                         
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                               <td>Houssam SADIKI</td>
                                                <td>sadiki</td>
                                                <td>sadiki.houssam@gmail.com</td>
                                         
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                               <td>Houssam SADIKI</td>
                                                <td>sadiki</td>
                                                <td>sadiki.houssam@gmail.com</td>
                                         
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                               <td>Houssam SADIKI</td>
                                                <td>sadiki</td>
                                                <td>sadiki.houssam@gmail.com</td>
                                         
                                                <td>
                                                    <a href="#" class="mdl-link">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                     
									</table>
                                    
								</div>
							</div>
                        		
					</div>
					
					@include('/include/footerUser')
				</main>
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>