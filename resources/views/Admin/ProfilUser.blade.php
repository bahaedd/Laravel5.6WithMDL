<!doctype html>
	<html lang>
		@include('/Admin/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('/Admin/include/headerUser')
			     @include('/Admin/include/sidebarUser')
				<main class=mdl-layout__content>
					<div class=hb-section>
						<div class="hb-section__background hb-section__background--bottom-align hb-background-parallax">
							<img src="{{ asset('images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
						</div>
						<div class="hb-section__overlay hb-section__overlay--gradient-from-top-30"></div>
						<div class=hb-section__content>
							<h1 class="hb-color-light mdl-typography--display-1 mdl-typography--font-thin hb-margin-top-30 hb-margin-bottom-300 mdl-typography--text-center">Profil</h1>
						</div>
					</div>
					<div class="hb-section hb-margin-top--240 hb-margin-bottom--0 " style="margin:300px;">
					  <div class="mdl-grid portfolio-max-width">

                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--6dp">
                    <div class="mdl-card__title" style="margin:auto; background-color:#FFF;">
                        <h2 class="mdl-card__title-text">Nom Utilisateur</h2>
						<i class="fa fa-edit icon material-icons" id="tooltip" style="margin-left:10px;margin-top:5px;font-size:20px;"></i>
						<p class="mdl-tooltip" for="tooltip">Settings</p>
                    </div>
                    <div class="mdl-card__media" style="width:50%;margin:auto; background-color:#FFF; text-align:center;" >
                        <img class="article-image" src="{{ asset('images/avatars/kaneki1.jpg') }}" alt="" style="width: 300px;height: 300px;border-radius:50%; ">
                    </div>

                    <div class="mdl-grid portfolio-copy">
                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Introduction</h3>
                        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
                            <p>
                                Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod ipsum do. Duis veniam reprehenderit laborum occaecat id proident nulla veniam. Duis enim deserunt voluptate aute veniam sint pariatur exercitation. Irure mollit est sit labore est deserunt pariatur duis aute laboris cupidatat. Consectetur consequat esse est sit veniam adipisicing ipsum enim irure.
                            </p>
                        </div>




                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Irure mollit est sit labore</h3>

                        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
                            <p>
                                Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod ipsum do. Duis veniam reprehenderit laborum occaecat id proident nulla veniam. Duis enim deserunt voluptate aute veniam sint pariatur exercitation. Irure mollit est sit labore est deserunt pariatur duis aute laboris cupidatat. Consectetur consequat esse est sit veniam adipisicing ipsum enim irure.
                            </p>
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