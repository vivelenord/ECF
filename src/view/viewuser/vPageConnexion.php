<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/PageConnexion.css">
    <link rel="stylesheet" href="../../assets/CSS/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Page de connexion</title>
    
    <!-- Fonctionalité gestion des utilisateurs par François -->

    <!-- <link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.20.0.css"> -->
    <!-- <script src="https://code.jquery.com/qunit/qunit-2.20.0.js"></script>   -->
  </head>
  <body>
  </head>
  <body>
    <header>
        <!-- ----------------------------navbar------------------------------------- -->
     <nav class="rounded-bottom" id="navbar">
      <div class="" id="fixe">
        <a href=""><img src="../../assets/images/logoshopart.jpg" alt="Logo">Shopart</a>
       </div>
       <div class="conteneur" id="boutons">
         <button class="elem bouton_nav btn-warning"><a class="" href="#">Categorie</a></button>
           <div class="conteneur" id="form1">
             <!-- <form class="d-flex">
               <input class="form-control me-2" type="text" id="recherche" placeholder="Rechercher un produit ou un artisan" aria-label="Rechercher">
                <button class="btn rounded-3 bg-white elem" id="rechercher" type="submit">Rechercher</button>
             </form> -->
  
             <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.html">Login Artisan</a></button>
             <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.html">Login Client</a></button>
             <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
           </div>
       </div>
     </nav>
     <!-- --------------------------------------------------------- -->
      </header>
    <h1 style="text-align:center">Bonjour, bienvenue sur la page de connexion</h1>
    <br>
    <h2 style="text-align:center">Veuillez entrer vos identifiants sinon créer un compte</h2>
    <!-- Création du formulaire dans une div container -->
    <div class="container">
        <div id="error"></div>
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
            <a class="btn btn-2 col-10" href="CreationCompteV2.php" role="button">Créer un compte</a>
        </form>
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

  </body>
</html>
