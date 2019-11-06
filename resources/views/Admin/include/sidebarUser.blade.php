      <div class="demo-drawer mdl-layout__drawer mdl-color--blank-900 mdl-color-text--blank-50">
        <header class="demo-drawer-header">
         <img src="{{ asset('images/user.jpg') }}" class="demo-avatar">
          <div class="demo-avatar-dropdown ">
            <span>Hi ! {{ Auth::user()->name }}</span>
            <div class="mdl-layout-spacer"></div>
            
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blank-800">
          
                    <a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="Admindashboard">Dashboard</a>
					<a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="ProfilUser">Profil</a>
                    <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Gestion Des Comptes</a>
					<nav class="mdl-navigation mdl-navigation__submenu">
						<a class="mdl-navigation__link mdl-navigation__submenu__link" href="Users">Utilisateurs</a> 
						<a class="mdl-navigation__link mdl-navigation__submenu__link" href="Admins">Administrateurs</a> 
					</nav>
					<a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="adminproducts">Products</a>
                    <a class="mdl-navigation__link mdl-navigation__link--submenu__link" href="Messages">Messages</a>
        </nav>
      </div>