<?php
// Inclure votre fichier contenant la classe TypeUser
require_once('TypeUser.php');

// Création d'une instance de TypeUser
$typeUser = new PHP\metier\TypeUser(1, "Client");

// Affichage de l'objet TypeUser
echo '<p>' . $typeUser . '</p>';

// Vérifier s'il y a une demande d'ajout au panier
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
    // Si l'action est d'ajouter un article au panier
    if ($_POST["action"] === "add_to_cart" && isset($_POST["userId"]) && isset($_POST["articleId"])) {
        $userId = $_POST["userId"];
        $articleId = $_POST["articleId"];
        // Appeler la méthode addToCart pour ajouter l'article au panier
        $result = $daoMarketPlace->addToCart($userId, $articleId);
        if ($result) {
            // Rediriger l'utilisateur vers la page du panier ou afficher un message de succès
            // par exemple : header("Location: vpanier.php");
            // ou : echo json_encode(array("success" => true));
        } else {
            // Afficher un message d'erreur
            // par exemple : echo json_encode(array("success" => false, "message" => "Failed to add item to cart"));
        }
    }
    // Ajouter d'autres conditions pour gérer d'autres actions du panier, comme la suppression d'un article, la modification de la quantité, etc.
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page panier</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/CSS/depot_annonce.css">
  <link rel="stylesheet" href="panier.css">
  <link rel="stylesheet" href="/assets/CSS/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/panier.js"></script>
  <script src="assets/js/table.js"></script>
  <script src="assets/js/test.js"></script>
</head>

<body>
  <header>
    <nav class="rounded-bottom" id="navbar">
      <div class="" id="fixe">
        <a href=""><img src="assets/images/logoshopart.jpg" alt="Logo">Shopart</a>
       </div>
       <div class="conteneur" id="boutons">
         <button class="elem bouton_nav btn-warning"><a class="" href="#">Categorie</a></button>
           <div class="conteneur" id="form">
             <form class="d-flex">
               <input class="form-control me-2" type="text" id="recherche" placeholder="Rechercher un produit ou un artisan" aria-label="Rechercher">
                <button class="btn rounded-3 bg-white elem" id="rechercher" type="submit">Rechercher</button>
             </form>
             <button class="elem bouton_nav btn-warning"><a class="" href="ModifSuppCompte.html"><i class="fa-solid fa-user"></i>Gérer mon compte</a></button>
             <button class="elem bouton_nav btn-warning"><a class="" href="acceuil.html"><i class="fa-solid fa-right-from-bracket"></i>Déconnexion</a></button>
             <!-- <button type="button" class="elem bouton_nav btn bg-warning" href="#">Favoris<span class="badge text-btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
               </svg></span>
             </button> -->
             <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
           </div>
       </div>
     </nav>
</header>
<h1 class="text-center">Panier</h1>

<table class="table" id="table-id"></table>
<table class="table panier-table">
  <thead>
    <tr>
      <th class="produit-colonne" width="150px">Produit</th>
      <th class="image-colonne" width="150px">Image</th>
      <th class="quantite-colonne" width="150px">Quantité</th>
      <th class="prix-colonne" width="150px">Prix</th>
      <th class="sous-total-colonne" width="150px">Sous-Total HT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nom produit 1</td>
      <td><img src="image1.jpg" alt="Image 1" width="100" /></td>
      <td><input type="number" class="form-control" id="quantiteProduit1" value="2"></td>
      <td><input type="text" class="form-control" id="montantProduit1" value="50"></td>
      <td><input type="text" class="form-control montantSousTotalProduit1" id="montantSousTotalProduit1" value="100"></td>
    </tr>
    <tr>
      <td>Nom produit 2</td>
      <td><img src="image2.jpg" alt="Image 2" width="100" /></td>
      <td><input type="number" class="form-control" id="quantiteProduit2" value="1"></td>
      <td><input type="text" class="form-control" id="montantProduit2" value="40"></td>
      <td><input type="text" class="form-control montantSousTotalProduit2" id="montantSousTotalProduit2" value="40"></td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan ="3">Total</td>
      <td class = "total"></td>
    </tr>
    
  </tfoot>
</table>
<div class="d-flex justify-content-between">
  <button type="button" class="btn btn-danger" onclick="supprimerProduit()">Supprimer un produit</button>
  <button type="button" class="btn btn-warning" onclick="modifierQuantite()">Modifier la quantité</button>
  <button type="button" class="btn btn-primary" onclick="ajouterProduit()">Ajouter un produit</button>
</div>
<button type="button" class="btn btn-success" onclick="calculTotal()">Calculer</button>
<p>
  <strong>Montant total HT : </strong>
  <input type="text" id="montanttotalht" class="form-control montanttotalht" readonly value="0">
</p>
<p>
  <strong>Montant total TTC : </strong>
  <input type="text" id="montanttotalttc" class="form-control montanttotalttc" readonly value="0">
</p>

<a href="livraison.html" class="btn btn-success">Valider le panier</a>

</body>
</html>