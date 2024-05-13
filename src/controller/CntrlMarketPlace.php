<?php
declare(strict_types=1);
namespace fav4\controller;

use fav4\dao\DaoMarketPlace;
use fav4\metier\User;
use fav4\metier\TypeUser;

class CntrlMarketPlace {

    private \PDO $conn;

    //TODO parametrer le chemin des images
    private const PATH_IMAGE = '../assets/img/favoris/';

    public function __construct(
        private DaoMarketPlace $daoMarketPlace = new DaoMarketPlace()
    ){
    }

    public function getIndex() {
        require './view/vindex.php';
    }

// ==============  LES Users

    public function getUsers() : void {
        $users = $this->daoMarketPlace->getUsers(); 
        require './view/viewuser/vusers.php';
    }
    public function getUserJson() : void {
        $content = array();
        $users = $this->daoMarketPlace->getUsers();
        $content = json_encode($users);
              
        require './view/users/vusersjson.php'; // a modifier
    }
    public function adduser() : void {
        $message = '';
        $messageFav = '';
        $daoMarketPlace = new DaoMarketPlace();
        if (isset($_POST['id'])) {
            try {
                $id             = $_POST['id'];
                $nom_usr            = $_POST['nom_usr'];
                $prenom_usr            = $_POST['prenom_usr'];
                $mail_usr            = $_POST['mail_usr'];
                $date_compte             = date("Y/m/d");
                $tel_usr            = $_POST['tel_usr'];
                $passw_usr            = $_POST['passw_usr'];
                $ad1_usr            = $_POST['ad1_usr'];
                $ad2_usr            = $_POST['ad2_usr'];
                $code_post            = $_POST['code_post'];
                $pathImgP            = $_POST['pathImgP'];
                $idtype       = (int)htmlspecialchars(trim($_POST['choix']));
                $type = $daoMarketPlace->getTypeUserById($idtype);
                $user = new User($id, $nom_usr, $prenom_usr, $mail_usr, $date_compte,$tel_usr, $passw_usr,$ad1_usr,$ad2_usr, $code_post,$pathImgP,$type);
                $this->daoMarketPlace->addUser($user);
                $message = 'Le favori est créé';
                // liste des types users
                // control
                // if (!is_numeric($id))                       throw new \Exception(Message::ID_MUST_BE_NUMERIC);
                // conversion en int si saisie de 10.23 !!
                // if (strlen(trim($nom_usr)) <3)                  throw new \Exception(Message::MIN_LONGUEUR_3);
                // if (!filter_var($url, FILTER_VALIDATE_URL)) throw new \Exception(Message::URL_INVALIDE);
                // if ($idRubrique==0)                         throw new \Exception(Message::RUBRIQUE_MUST_EXIST);
        
                // INSERT
                // $rubrique = $this->daoMarketPlace-> getRubriqueById($idRubrique);
                // if ($rubrique == null)                      throw new \Exception(Message::RUBRIQUE_MUST_EXIST);
                //TODO Gerer le user en session
                // $user = new User(1,'muller','');
                // $listeFav = (isset($_SESSION['listeFav']))? $_SESSION['listeFav'] : [];
                // array_push($listeFav,$favori);
                // $_SESSION['listeFav'] = $listeFav;
                // $messageFav = 'Le favori est ajouté';
                
            } catch (\Exception $e) {
                    $message = $e->getMessage();
            } 
            
            $this->getUsers();
        }
        else{
            $typeUsers = $daoMarketPlace->getTypeUser();
            include './view/viewuser/vajoutuser.php';
        } 
    }
    // public function delUser() : void {
    //     $message = '';

    //     // si id dans $_POST, il faut delete le user
    //     if (isset($_POST['id'])) {
    //         try {
    //             $id             = htmlspecialchars(trim($_POST['id']));

    //             // control
    //             if (!is_numeric($id))     throw new \Exception("L'identifiant doit être numérique.");
    //             $id = (int)$id;     // conversion en int

    //             // delete du fichier image
    //             $favori = $this->daoMarketPlace->getFavoriById($id);
    //             if ($favori->getImage() != null) {
    //                 $fichier = self::PATH_IMAGE . $favori->getImage();
    //                 unlink($fichier);
    //             }
                
    //             // DELETE BDD
    //             $this->daoMarketPlace->delFavori($id);
    //             $message = 'Votre favori est supprimé';
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }

    //     $favoris = $this->daoMarketPlace->getFavoris();        
    //     require './view/favoris/vfavoris.php';
    // }

























    // public function addRubrique() : void {

    //     $message = '';      
    //     $messageRub = '';  
    //     // si id dans $_POST, il faut enregistrer la categorie
    //     if (isset($_POST['id'])) {
    //         try {
    //             $parent     = null;
    //             $id         = htmlspecialchars(trim($_POST['id']));
    //             $nom        = htmlspecialchars(trim($_POST['nom']));
    //             $idParent   = htmlspecialchars(trim($_POST['idparent']));
        
    //             // control
    //             if (!is_numeric($id))     throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;     // conversion en int
    //             if (strlen($nom) <3)      throw new \Exception(Message::MIN_LONGUEUR_3);
    //             if ($idParent!=0)         {
    //                 $idParent = (int)$idParent;
    //                 $parent = $this->daoMarketPlace->getRubriqueById($idParent);
    //             }
        
    //             // INSERT
    //             $rubrique = new Rubrique($id, $nom, $parent);
    //             $listeRub = (isset($_SESSION['listeRub']))? $_SESSION['listeRub'] : [];
    //             $this->daoMarketPlace->addRubrique($rubrique);
    //             array_push($listeRub,$rubrique);
    //             $_SESSION['listeRub'] = $listeRub;
    //             $messageRub = 'La rubrique est ajoutée';
    //             $message = 'Votre rubrique est crée';
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }
    //     $rubriques = $this->daoMarketPlace->getRubriquesWithParent();        
    //     require './view/rubriques/vajoutrubrique.php';
    // }
    // public function updateRubrique() : void {

    //     $message = '';        
    //     // si id dans $_POST, il faut enregistrer la categorie
    //     if (isset($_POST['id'])) {
    //         try {
    //             $parent     = null;
    //             $id         = htmlspecialchars(trim($_POST['id']));
    //             $nom        = htmlspecialchars(trim($_POST['nom']));
    //             $idParent   = htmlspecialchars(trim($_POST['idparent']));
        
    //             // control
    //             if (!is_numeric($id))     throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;     // conversion en int
    //             if (strlen($nom) <3)      throw new \Exception(Message::MIN_LONGUEUR_3);
    //             if ($idParent!=0)         {
    //                 $idParent = (int)$idParent;
    //                 $parent = $this->daoMarketPlace->getRubriqueById($idParent);
    //             }
    //             // echo $parent;
        
    //             // UPDATE
    //             $rubrique = $this->daoMarketPlace->getRubriqueById($id);
    //             $this->daoMarketPlace->updateRubrique($rubrique);
    //             $message = 'Votre rubrique a été mise à jour';
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }
    //     $rubriques = $this->daoMarketPlace->getRubriquesWithParent();        
    //     require './view/rubriques/veditrubrique.php';
    // }


    // public function getRubrique() : void {
    //     $message = '';
    //     $rubrique = null;

    //     if (isset($_GET['id'])) {
    //         try {
    //             $id             = htmlspecialchars(trim($_GET['id']));

    //             // control
    //             if (!is_numeric($id))     throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;     // conversion en int
    //             $rubrique = $this->daoMarketPlace->getRubriqueById($id);
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }

    //     if ($rubrique != null) {
    //         require './view/rubriques/vrubrique.php';
    //     }
    //     else {
    //         $rubriques = $this->daoMarketPlace->getRubriques();
    //         require './view/rubriques/vrubriques.php';
    //     }
    // }
    
    // public function delRubrique() : void {
    //     $message = '';

    //     // si id dans $_POST, il faut delete la rubrique
    //     if (isset($_POST['id'])) {
    //         try {
    //             $id             = htmlspecialchars(trim($_POST['id']));

    //             // control
    //             if (!is_numeric($id))     throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;     // conversion en int

    //             // DELETE
    //             $this->daoMarketPlace->delRubrique($id);
    //             $message = 'Votre rubrique est supprimée';
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }

    //     $rubriques = $this->daoMarketPlace->getRubriques();
    //     require './view/view/vrubriques.php';
    // }

    // // ==============  LES FAVORIS

    // /**
    //  * Affiche la liste des favoris
    //  *
    //  * @return void
    //  */
    // public function getFavorisjson() : void {
    //     $contents = array();
    //     $favoris = $this->daoMarketPlace->getFavoris();  
    //     $contents = json_encode($favoris);
        
    //     require './view/favoris/vfavoris.php';
    // }
    // public function getFavoris() : void {
    //     $favoris = $this->daoMarketPlace->getFavoris();        
    //     require './view/favoris/vfavoris.php';
    // }
    

    // /**
    //  * Affiche le favori sélectionné. 
    //  * En l'absence de favori sélectionné, affiche la liste des favoris.
    //  *
    //  * @return void
    //  */
    // public function getFavori() : void {
    //     $favori = null;
    //     if (isset($_GET['id'])) { 
    //         $id = (int)$_GET['id'];
    //         $favori = $this->daoMarketPlace->getFavoriById($id);
    //     }
    //     if (isset($favori)) {
    //         require './view/favoris/vfavori.php';
    //     }
    //     else $this->getFavoris();
    // }

   
    // public function addFavori() : void {
    //     $message = '';
    //     $messageFav = '';
    //     if (isset($_POST['id'])) {
    //         try {
    //             $id             = $_POST['id'];
    //             $nom            = $_POST['nom'];
    //             $url            = $_POST['url'];
    //             $idRubrique     = $_POST['idrubrique'];
    //             $image          = $this->uploadImage()[0];
    //             $creation       = new \DateTimeImmutable();
                
    //             // control
    //             if (!is_numeric($id))                       throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;                     // conversion en int si saisie de 10.23 !!
    //             if (strlen(trim($nom)) <3)                  throw new \Exception(Message::MIN_LONGUEUR_3);
    //             if (!filter_var($url, FILTER_VALIDATE_URL)) throw new \Exception(Message::URL_INVALIDE);
    //             $idRubrique = (int)$idRubrique;     // 0 si non numeric ou null
    //             if ($idRubrique==0)                         throw new \Exception(Message::RUBRIQUE_MUST_EXIST);
        
    //             // INSERT
    //             $rubrique = $this->daoMarketPlace-> getRubriqueById($idRubrique);
    //             if ($rubrique == null)                      throw new \Exception(Message::RUBRIQUE_MUST_EXIST);
    //             //TODO Gerer le user en session
    //             $user = new User(1,'muller','');
    //             $favori = new Favori($id, $nom, $url, $image, $rubrique, $user, $creation);
    //             $listeFav = (isset($_SESSION['listeFav']))? $_SESSION['listeFav'] : [];
    //             $this->daoMarketPlace->addFavori($favori);
    //             array_push($listeFav,$favori);
    //             $_SESSION['listeFav'] = $listeFav;
    //             $messageFav = 'Le favori est ajouté';
                
    //             $message = 'Le favori est créé';
    //         } catch (\Exception $e) {
    //                 $message = $e->getMessage();
    //         } 
    //     }
    //     // liste des categories
    //     $rubriques = $this->daoMarketPlace->getRubriques();
    //     include './view/favoris/vajoutfavori.php';  
    // }

    // /**
    //  * upload image 
    //  * recupere l'image dans $_FILE et l'upload dans le site. 
    //  *
    //  * @return array [string uid image | null, message erreur | '']
    //  */
    // //TODO parametrer le chemin d'upload des images
    // function uploadImage() : array {
    //     // var_dump($_FILES);
    //     $message = '';
    //     $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    //     $maxSize = 500000;
    //     $file = null;   // nom image = null, message = ''
    
    //     if(isset($_FILES['image'])){
    //         $tmpName    = $_FILES['image']['tmp_name'];      // nom donne par le systeme
    //         $name       = $_FILES['image']['name'];          // pour recuperer l extension du fichier
    //         $size       = $_FILES['image']['size'];
    //         $error      = $_FILES['image']['error'];          
    //         // recuperation de l'extension
    //         $tabName = explode('.', $name);
    //         $extension = strtolower(end($tabName));        
    //         // traitement de l'image
    //         if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
    //                 $uniqueName = uniqid('', true);                   //uniqid exemple : 64437981e2cff3.06777509
    //                 $file = 'img-'.$uniqueName.".".$extension;
    //                 // de D:\xampp\tmp\php757D.tmp vers self::PATH_IMAGE.$file
    //                 move_uploaded_file($tmpName, self::PATH_IMAGE . $file);       // enregistrement de l'image dans le site
    //         }
    //         else{
    //             $message = Message::IMAGE_INVALIDE;
    //         }
    //     }
    //     return [$file,$message]; 
    // }
    // public function delFavori() : void {
    //     $message = '';

    //     // si id dans $_POST, il faut delete le favori
    //     if (isset($_POST['id'])) {
    //         try {
    //             $id             = htmlspecialchars(trim($_POST['id']));

    //             // control
    //             if (!is_numeric($id))     throw new \Exception("L'identifiant doit être numérique.");
    //             $id = (int)$id;     // conversion en int

    //             // delete du fichier image
    //             $favori = $this->daoMarketPlace->getFavoriById($id);
    //             if ($favori->getImage() != null) {
    //                 $fichier = self::PATH_IMAGE . $favori->getImage();
    //                 unlink($fichier);
    //             }
                
    //             // DELETE BDD
    //             $this->daoMarketPlace->delFavori($id);
    //             $message = 'Votre favori est supprimé';
    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
    //     }

    //     $favoris = $this->daoMarketPlace->getFavoris();        
    //     require './view/favoris/vfavoris.php';
    // }

    // public function editRubrique() : void {
    //     $message = '';
    //     $rubrique = null;

    //     if (isset($_GET['id'])) {
    //         try {
    //             $id             = htmlspecialchars(trim($_GET['id']));

    //             // control
    //             if (!is_numeric($id))     throw new \Exception(Message::ID_MUST_BE_NUMERIC);
    //             $id = (int)$id;     // conversion en int
    //             $rubrique = $this->daoMarketPlace->getRubriqueById($id);
    //             $idParent = $rubrique->getParent()->getId();
    //             $idParent = (int)$idParent;
    //             $Parent = $this->daoMarketPlace->getRubriqueById($idParent);
    //             echo $Parent;
    //             $rubriques = $this->daoMarketPlace->getRubriques();
    //             $nom = $rubrique->getNom();

    //         } catch (\Exception $e) {
    //             $message = $e->getMessage();
    //         } catch (\Error $e) {
    //             $message = $e->getMessage();
    //         } 
            
    //     }
    //     echo $rubrique;
    //     // echo $rubrique->getNom();
    //     // echo $rubrique->getId();
    //     // echo $idParent;
    //     // echo $rubrique
    //     require './view/rubriques/veditrubrique.php';
    //     // if ($rubrique != null) {
    //     //     require './view/rubriques/veditrubrique.php';
    //     // }
    //     // else {
    //     //     $rubriques = $this->daoMarketPlace->getRubriques();
    //     //     require './view/rubriques/veditrubrique.php';
    //     // }
    // }

    // // ============  SESSION
    // public function removeSessionFav() {
    //     unset($_SESSION['listeFav']);      // Ne genere pas d'erreur si la cle n existe pas
    //     $listeFav = (isset($_SESSION['listeFav']))? $_SESSION['listeFav'] : array();
    //     $listeRub = (isset($_SESSION['listeRub']))? $_SESSION['listeRub'] : [];
    //     require './view/session/vsession.php';
    //     }
    // public function removeSessionRub() {
    //     unset($_SESSION['listeRub']);
    //     $listeFav = (isset($_SESSION['listeFav']))? $_SESSION['listeFav'] : array();
    //     $listeRub = (isset($_SESSION['listeRub']))? $_SESSION['listeRub'] : [];
    //     require './view/session/vsession.php';
    // }
    // public function session() {

    //     $listeChose = (isset($_SESSION['listeFav']))? $_SESSION['listeFav'] : [];
    //     $listeMachin = (isset($_SESSION['listeRub']))? $_SESSION['listeRub'] : [];
    //     require './view/session/vsession.php';
    // }



    // // ============== COOKIE

    // public function cookie() {
    //     $id = (isset($_COOKIE['dernierAjoutId']))? $_COOKIE['dernierAjoutId'] : '???';
    //     $nom = (isset($_COOKIE['dernierAjoutNom']))? $_COOKIE['dernierAjoutNom'] : '???';

    //     require './view/vcookie.php';
    // }



}
