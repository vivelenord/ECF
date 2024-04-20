<?php
declare(strict_types=1);
namespace PHP\tests;

require 'C:\htppd\XAMMP\htdocs\PHP\vendor\autoload.php';

use PHP\dao\DaoMarketPlace as DaoMarketPlace;
use PHP\TypeUser;
use PHP\User;
use PHP\DaoMarketPlace;
use PHP\metier\TypeUser as MetierTypeUser;
use PHP\Panier;


// on instancie la couche de persistance
$market = new DaoMarketPlace();
 
try {
// Tests pour le panier
$panier = new Panier(); // Instanciez votre objet panier ici

// Ajout de produits au panier
$panier->ajouterProduit("Produit 1", 2, 50); // Ajoutez un produit au panier avec son nom, sa quantité et son prix
$panier->ajouterProduit("Produit 2", 1, 40);

// Vérifiez si le panier contient les produits ajoutés
$produits = $panier->getProduits();
foreach ($produits as $produit) {
    echo "Nom du produit : " . $produit['nom'] . ", Quantité : " . $produit['quantite'] . ", Prix : " . $produit['prix'] . "<br>";
}
echo "<hr>";

// Modifiez la quantité d'un produit dans le panier
$panier->modifierQuantite("Produit 1", 3); // Modifiez la quantité du produit 1 à 3

// Supprimez un produit du panier
$panier->supprimerProduit("Produit 2"); // Supprimez le produit 2 du panier

// Calculez le total du panier
$total = $panier->calculerTotal();
echo "Total du panier : " . $total . "<br>";

    $users = $dao->getUsers();
    affiche($users);
    echo '<hr>';


    $categorie = new TypeUser(3,'Admin');
    $users = $dao->getTypeUser($categorie);
    affiche($users);
    echo '<hr>';

    $categories = $dao->getTypeUser();
    affiche($categories);
    echo '<hr>';

    echo'getCategorieById(1) : ';
    $categorie = $dao->getCategorieById(1);
    echo "$categorie<hr>";

    echo'getCategorieById(2) : ';
    $categorie = $dao->getCategorieById(2);
    echo "$categorie<hr>";

    echo'getPlatById(1) : ';
    $plat = $dao->getPlatById(1);
    echo "$plat<hr>";

    echo'getPlatById(7) : ';
    $plat = $dao->getPlatById(7);
    echo "$plat<hr>";

    // plat inexistant
    echo'getPlatById(57) : ';
    $plat = $dao->getPlatById(57);
    echo "$plat - ". gettype($plat) . "<hr>";


    // addPlat
    echo 'addplat($plat) <br>';
    $ref = 103;
     $categorie = $dao->getCategorieById(2);
    $plat = new Plat($ref,"libelle plat $ref", 500, "composition du plat numero $ref", 'menu-item-1.png', $categorie);
    $ok = $dao->addPlat($plat);
    if ($ok) {
        $plats = $dao->getPlatsWithCategorie();
        affiche($plats);
    }
    echo "<hr>";

 

} catch (\Exception $e) {
    echo("DM Test!! " . $e->getMessage() . ' ' . $e->getCode());
} catch (\Error $e) {
    echo("DM Test!! " . $e->getMessage() . ' ' .  $e->getCode());
}






function affiche($plats) : void {
    foreach ($plats as $plat) {
        echo $plat;
        echo '<br>';
    }
}




