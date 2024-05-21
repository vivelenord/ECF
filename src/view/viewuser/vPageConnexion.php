<?php
    $title = 'Création de compte';

    ob_start();
    include './view/inc/incMenuBar.php';
    $menuBar = ob_get_clean();
?>

<?php ob_start(); ?>
<h1 style="text-align:center">Bonjour, bienvenue sur la page de connexion</h1>
<br>
<h2 style="text-align:center">Veuillez entrer vos identifiants sinon créer un compte</h2>
<!-- Création du formulaire dans une div container -->
<div class="container"  id="myModal" class="modal">
  <div class="modal-content">
  <!-- <span class="close">&times;</span> -->
  <form id="form" action="ModifSuppCompte.html" method="GET">
        <div class="form-group">
            <label for="email" class="taille">Adresse email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="exemple@gmail.com" required>
            <i class="fa-solid fa-at"></i>
        </div>
        <div class="form-group pass-field">
            <label for="password" class="taille">Mot de passe</label>
            <input id="password" name="password" class="form-control" type="password" placeholder="password">
            <i class="fa-solid fa-eye"></i>
        </div>
        <button type="submit" class="btn btn-2 col-10">Se connecter</button>
        <a class="btn btn-2 col-10" href="<?=APP_ROOT ?>/users/ajout" role="button">Créer un compte</a>
    </form>
  </div>  
  
    <div id="error"></div>
    
    <div id="qunit"></div>
    <div id="qunit-fixture"></div>

</div>


<!-- Footer -->
<footer >
  <div class="text-center p-3 fixed-bottom" style="background-color:  rgba(208, 97, 28, 0.265);text-align:center">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="">François selmi --- Groupe 2 ---</a>
  </div>
    <!-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/logo-white.png" class="bi" width="24" height="24"></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/01  Gradient Glyph/Instagram_Glyph_Gradient.png"  class="bi" width="24" height="24"></a></li>
      <li class="mx-3"><a class="text-body-secondary" href="#"><img src="./assets/images/icons8-facebook.png"  class="bi" width="30" height="30"></a></li>
    </ul> -->
  </footer>
<script src="/assets/CSS/bootstrap.bundle.min.js"></script>
<script defer type="module" src="/assets/js/PageConnexionV3AvecQunit.js"></script>
</html>
<?php $content = ob_get_clean(); ?>
<?php require('./view/base.php'); ?>