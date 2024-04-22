<?php
declare(strict_types=1);
namespace ECF\tests;

require 'C:\Users\franc\Downloads\Formation DWWM\projet\Depot dossier groupe metis 28Janvier 2024\temp\DepotJsGitHub\ECF\vendor\autoload.php';

// use ECF\dao\DaoMarketPlace as DaoMarketPlace;
use ECF\metier\User;
use ECF\dao\DaoMarketPlace;
use ECF\metier\TypeUser;
use ECF\metier\Article;
// use ECF\metier\Article as MetierArticle;

// on instancie la couche de persistance
$market = new DaoMarketPlace();
 
// try {
// Tests pour le panier
$panier = new Article(11,'mon panier',0,'panier perso'); // Instanciez votre objet panier ici

// Ajout de produits au panier
// $panier->ajouterProduit("Produit 1", 2, 50); // Ajoutez un produit au panier avec son nom, sa quantité et son prix
// $panier->ajouterProduit("Produit 2", 1, 40);

// Vérifiez si le panier contient les produits ajoutés
// $produits = $panier->getProduits();
// foreach ($produits as $produit) {
//     echo "Nom du produit : " . $produit['nom'] . ", Quantité : " . $produit['quantite'] . ", Prix : " . $produit['prix'] . "<br>";
// }
// echo "<hr>";

// // Modifiez la quantité d'un produit dans le panier
// $panier->modifierQuantite("Produit 1", 3); // Modifiez la quantité du produit 1 à 3

// // Supprimez un produit du panier
// $panier->supprimerProduit("Produit 2"); // Supprimez le produit 2 du panier

// // Calculez le total du panier
// $total = $panier->calculerTotal();
// echo "Total du panier : " . $total . "<br>";


//Affichage des utilisateurs
$users = $market->getUsers();
affiche($users);
echo '<hr>';


// $typeuser = new TypeUser(3,'Admin');
// $Types = $market->getTypeUser($typeuser);
// affiche($Types);
// echo '<hr>';

// $typeusers = $market->getTypeUser();
// affiche($typeusers);
// echo '<hr>';

// } catch (\Exception $e) {
//     echo("Test!! " . $e->getMessage() . ' ' . $e->getCode());
// } catch (\Error $e) {
//     echo("Test!! " . $e->getMessage() . ' ' .  $e->getCode());
// }
// // addUser
// echo 'addUser($user) <br>';
// $typeuser = new TypeUser(3,'Admin');
// // $type = $market->getTypeUser($typeuser);
// // $type = 1;
// $ref=30;
// $user = new User($ref,"Marc", "Marc","Marc","Marc",0111111111,"Marc","Marc","Marc",06000,"path", $typeuser);
// $ok = $market->addUser($user);
// if ($ok) {
//     $users = $market->getUsers();
//     affiche($users);
// }
// echo "<hr>";


function affiche($users) : void {
    foreach ($users as $user) {
        echo $user;
        echo '<br>';
    }
}




