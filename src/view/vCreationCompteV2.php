<!DOCTYPE html>
<html lang="fr">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../assets/CSS/bootstrap.css">
		<link rel="stylesheet" href="../../assets/CSS/marketplacev2.css">
        <link rel="stylesheet" href="../../assets/CSS/navbar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Création de compte</title>
     <!-- Fonctionalité gestion des utilisateurs par François -->
  </head>
  <body>
    <!-- header -->
    <header>
        <!-- Début de la navbar -->
        <nav class="rounded-bottom" id="navbar">
            <div class="" id="fixe">
              <a href=""><img src="../../assets/images/logoshopart.jpg" alt="Logo">Shopart</a>
             </div>
             <div class="conteneur" id="boutons">
               <button class="elem bouton_nav btn-warning"><a class="" href="#">Categorie</a></button>
                 <div class="conteneur" id="form">
                   <!-- <form class="d-flex">
                     <input class="form-control me-2" type="text" id="recherche" placeholder="Rechercher un produit ou un artisan" aria-label="Rechercher">
                      <button class="btn rounded-3 bg-white elem" id="recherchernav" type="submit">Rechercher</button>
                   </form> -->
                   <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.php">Login Artisan</a></button>
                   <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.php">Login Client</a></button>
                   <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
                 </div>
             </div>
           </nav>
           <!-- Fin de la navbar -->
    </header>
    <!-- Début du formulaire -->
    <div class="containerform mt-5">
        <p id="message2" style="color: white;text-align: center;font-size: 25px"></p>
        <form class="row g-3" id="form-user" method="get" action="ModifSuppCompte.html">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="choix" id="client" value="client" checked>
                <label class="form-check-label" for="client">Client</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="choix" id="artisan" value="artisan">
                <label class="form-check-label" for="artisan">Artisan</label>
            </div>
            <p id="message"></p>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom">
            </div>

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom">
            </div>
            <div class="col-4">
                <label for="inputAddress" class="form-label">Numéro de Téléphone</label>
                <input type="text" class="form-control" id="tel" placeholder="xx xx xx xx xx">
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="mail1">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirmez votre email</label>
                <input type="email" class="form-control" id="mail2">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="passw1">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirmez votre mot de passe</label>
                <input type="password" class="form-control" id="passw2">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="inputAddress1" placeholder="Rue, numéro">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Complément d'adresse</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Bat, Res, Chez.">
            </div>
    
            <label for="zoneSelect1" class="form-label">Département</label>
            <div class="col-6 display: flex">
                <select id="zoneSelect1" aria-label="Département">
                </select>
            </div>
            <div class="col-6 display: flex">
                <input type="button" class="form-control" id="rechercher" value="GO" />
            </div>
            <label for="zoneSelect2" class="form-label">Ville</label>
            <div class="col-6">
                <select id="zoneSelect2" aria-label="Ville">
                </select>
            </div>     
            <div class="col-6 display: flex">
                <input type="button" class="form-control" id="rechercher2" value="GO" />
            </div>
            
            <div class="col-12">
                <label class="ajoutphoto">Ajouter une photo de profil</label>
                <input type="file" class="form-control-file" id="photoprofil">
            </div>
            <div class="col-10">
                <a class="btn btn-2 col-10 ms-5 mt-2 ps-3" id="soumettre" href="#" role="button" type="submit">Soumettre</a>
            </div>
        </form>
        <!-- Fin du formulaire -->
        <div class="row">
            <div>
                <ul id="menu-flters"></ul>
            </div>
        </div>
    </div>
    <!-- Début du Footer -->
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
        <!-- Fin du Footer -->
    <script defer type="module" src="../../assets/js/PageCreationCompteV2.js"></script>
    <script src="../../assets/CSS/bootstrap.bundle.min.js"></script>
  </body>
</html>