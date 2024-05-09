<?php
declare(strict_types=1);
namespace ECF\tests;

require_once 'C:\htppd\XAMMP\htdocs\FS\POO\ECF\vendor\autoload.php';

use ECF\metier\User;
use ECF\dao\DaoMarketPlace;
use ECF\metier\TypeUser;


// on instancie la couche de persistance
$market = new DaoMarketPlace();
//Affichage des utilisateurs
$users = $market->getUsers();
affiche($users);
echo '<hr>';

$TypeUser = $market->getTypeUserById(2);
affiche($TypeUser);
echo '<hr>';

//ajouter un nouveau type user
$typeuser = new TypeUser(10,'AAdmini');
$Types = $market->getTypeUser($typeuser);
affiche($Types);
echo '<hr>';

// Ajouter un utilisateur et Afficher toute la liste des utilisateurs
echo 'adduser($user) <br>';
$ref = 255;
$categorie = $market->getCategorieById(2);
$user = new User($ref,"Mister RGB", "Red","Green","Blue",0111111111,"Marc","Marc","Marc",06000,"path", $categorie);
$ok = $market->addUser($user);
if ($ok) {
    $users = $market->getUsersWithCategorie();
    affiche($users);
}
echo "<hr>";

$del = $market->delUser(311);
if ($del) {
    $users = $market->getUsersWithCategorie();
    affiche($users);
}

function affiche($users) : void {
    foreach ($users as $user) {
        echo $user;
        echo '<br>';
    }
}






// $typeuserAdmin = new TypeUser(3,'Admin');
// affiche($typeuserAdmin);
// echo '<hr>';


// $typeusers = $market->getTypeUser();
// affiche($typeusers);
// echo '<hr>';

// } catch (\Exception $e) {
//     echo("Test!! " . $e->getMessage() . ' ' . $e->getCode());
// } catch (\Error $e) {
//     echo("Test!! " . $e->getMessage() . ' ' .  $e->getCode());
// }
// addUser
// echo 'addUser($user) <br>';
// $typeuser = new TypeUser(2,'Artisan');
// $type = $market->getTypeUser($typeuser);
// // // $type = 1;
// $ref=30;
// // $typeuser = 2;
// $user = new User($ref,"Marc", "Marc","Marc","Marc",0111111111,"Marc","Marc","Marc",06000,"path", $typeuser);
// $ok = $market->addUser($user);
// if ($ok) {
//     $users = $market->getUsers();
//     affiche($users);
// }
// echo "<hr>";

//Liste des users avec le TypeUser
// $categorie = new TypeUser(1,'Admini');
// $plats = $market->getPlatsByCategorie($categorie);
// affiche($plats);
// echo '<hr>';

