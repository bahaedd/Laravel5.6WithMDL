      <div class="demo-drawer mdl-layout__drawer mdl-color--blank-900 mdl-color-text--blank-50">
        <header class="demo-drawer-header">
          <div class="demo-avatar-dropdown ">
            <span>Hi ! {{ Auth::user()->name }}</span>
            <div class="mdl-layout-spacer"></div>
       
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blank-800">
          
                    <a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="Fournisseur">Dashboard</a>
					<a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="ProfilFornisseur">Profil</a>
                    <a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="productsFornisseur">Gestion des produits</a>
                    <a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="MessagesFornisseur">Messages</a>
					
				
        </nav>
      </div>