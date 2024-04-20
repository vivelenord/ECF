<?php
declare(strict_types=1);
namespace PHP\webapp;
require_once 'C:\htppd\XAMMP\htdocs\PHP\vendor\autoload.php';

use PHP\dao\DaoMarketPlace;
use PHP\webapp\DmException;
use PHP\metier\TypeUser;
use PHP\metier\User;

$message = '';

// si id dans $_POST, il faut enregistrer la categorie
if (isset($_POST['id'])) {
    try {
        $id             = htmlspecialchars(trim($_POST['id']));
        $nom_usr        = htmlspecialchars(trim($_POST['nom_usr']));
        $prenom_usr            = htmlspecialchars(trim($_POST['prenom_usr']));
        $mail_usr        = htmlspecialchars(trim($_POST['mail_usr']));
        $date_compte             = date("Y/m/d");
        $tel_usr        = htmlspecialchars(trim($_POST['tel_usr']));
        $passw_usr             = htmlspecialchars(trim($_POST['passw_usr']));
        $ad1_usr       = htmlspecialchars(trim($_POST['ad1_usr']));
        $ad2_usr             = htmlspecialchars(trim($_POST['ad2_usr']));
        $code_post        = htmlspecialchars(trim($_POST['code_post']));
        $pathImage             = htmlspecialchars(trim($_POST['pathImage']));
        $type       = 1;
        // $type       = htmlspecialchars(trim($_POST['type']));

        // control
        // if (!is_numeric($id))     throw new DmException(MyExceptionCase::ID_MUST_BE_NUMERIC);
        // $id = (int)$id;     // conversion en int
        // if (strlen($libelle) <3)  throw new DmException(MyExceptionCase::MIN_LONGUEUR_3);

        // INSERT
        $user = new User($id,$nom_usr,$prenom_usr,$mail_usr,$date_compte,$tel_usr,$passw_usr,$ad1_usr,$ad2_usr,$code_post,$pathImage,$type);
        $dao = new DaoMarketPlace();
        $dao->addUser($user);
        $message = 'Votre Utilisateur est crée';
    } catch (DmException $e) {
        $message = $e->getCode() . ' - ' . $e->getMessage();
    } catch (\Exception $e) {
        $message = $e->getCode() . ' - ' . $e->getMessage();
    } catch (\Error $e) {
        $message = $e->getMessage();
    } 
}


include '../view/vCreationCompteV2.php';