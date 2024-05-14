<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=APP_ROOT ?>"><img src="../../assets/images/logoshopart.jpg" alt="Logo" height="100px" width="100px"></a>
    <!-- <a href=""><img src="../../assets/images/logoshopart.jpg" alt="Logo">Shopart</a> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="">Liste des Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=APP_ROOT ?>/users">Liste des utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=APP_ROOT ?>/favoris">Liste des artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/users/ajout">Ajout User</a></li>
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/users">Supression User</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/users/ajout">Ajout autre</a></li>
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/users">Supression autre</a></li>
          </ul>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/rubriques/json">Liste des utilisateurs</a></li>
            <li><a class="dropdown-item" href="<?=APP_ROOT ?>/favoris/json">Liste des Favoris</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="<?=APP_ROOT ?>/session">Voir Session</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=APP_ROOT ?>/cookie">Voir Cookie</a>
        </li>
        <div class="btn-group">
          <button type="button" class="elem bouton_nav btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Admin</button>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?=APP_ROOT ?>/users/ajout">Creer un Utilisateur</a></li>
              <li><a class="dropdown-item" href="SupprimerUtilisateur.php">Supprimer un Utilisateur</a></li>
          </ul>
        </div>
        <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.php">Login Artisan</a></button>
        <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.php">Login Client</a></button>
        
                   
        <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
        <li class="nav-item">
          <a class="nav-link" href="<?=APP_ROOT ?>/users/ajout">Créer un compte</a>
        </li>
      </li>
      </ul>
    </div>
  </div>
</nav>