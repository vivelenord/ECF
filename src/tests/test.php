<?php
declare(strict_types=1);
namespace PHP\tests;

require 'C:\htppd\XAMMP\htdocs\PHP\vendor\autoload.php';

use PHP\dao\DaoMarketPlace as DaoMarketPlace;
use PHP\TypeUser;
use PHP\User;
use PHP\DaoMarketPlace;
use PHP\metier\TypeUser as MetierTypeUser;

// on instancie la couche de persistance
$market = new DaoMarketPlace();

try {
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




