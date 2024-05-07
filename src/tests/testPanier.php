<?php
declare(strict_types=1);
namespace ECF\tests;

require 'D:\xampp\htdocs\ECF-main\vendor\autoload.php';
use ECF\dao\DaoMarketPlace;
use ECF\metier\TypeUser;
use ECF\metier\Article;
use ECF\metier\Panier;

// quelles données pour afficher la vue
$dao = new DaoMarketPlace();
$panier = $dao->getCartContents(1);
// var_dump($panier);

$listeArticles = [];
foreach ($panier->getArticles() as $article) {
   array_push($listeArticles, [$article,2]);
}


require '../view/vpanierNew.php';



// // on instancie la couche de persistance
// $market = new DaoMarketPlace();
// $market->addToCart(1,1);
 
// // try {
// // Tests pour le panier
// $panier = new Panier(); // Instanciez votre objet panier ici

// // Ajout de produits au panier
// // $panier->ajouterProduit("Produit 1", 2, 50); // Ajoutez un produit au panier avec son nom, sa quantité et son prix
// // $panier->ajouterProduit("Produit 2", 1, 40);

// // Vérifiez si le panier contient les produits ajoutés
// // $produits = $panier->getProduits();
// // foreach ($produits as $produit) {
// //     echo "Nom du produit : " . $produit['nom'] . ", Quantité : " . $produit['quantite'] . ", Prix : " . $produit['prix'] . "<br>";
// // }
// // echo "<hr>";

// function affiche($users) : void {
//     foreach ($users as $user) {
//         echo $user;
//         echo '<br>';
//     }
// }








