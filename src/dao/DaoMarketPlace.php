<?php
declare(strict_types=1);
namespace PHP\dao;

use PHP\dao\DatabaseUser;
use PHP\dao\RequetesUser;
use PHP\metier\TypeUser;
use PHP\metier\User;
use PHP\webapp\DmException;
use PHP\webapp\MyExceptionCase;

//TODO : gestion des exceptions
class DaoMarketPlace {

    private \PDO $conn;

    public function __construct() {
        try {
            $this->conn = DatabaseUser::getConnection();
        } catch (\Exception $e) {
            $conn = null;
        }
    }

    /**
     * Retourne la liste des users de la BDD
     *
     * @return array : Tableau d'objets de type user
     */
    public function getUsers() : ? array {
        $users = array();
        $query      = RequetesUser::SELECT_User;
        try {
            $cursor  = $this->conn->query($query);
            // FETCH_OBJ pour obtenir la ligne sous forme d'un objet construit avec les cles correspondantes aux colonnes du select
            while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
                $user = new User($row->id, $row->nom_usr, $row->prenom_usr, $row->mail_usr,$row->date_compte, $row->tel_usr,$row->passw_usr,$row->ad1_usr,$row->ad2_usr,$row->code_post, $row->pathImgP, $row->type);
                array_push($users,$user);
            }
        }
        catch (\Exception $e) {
            throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
        }
        return $users;
    }

    // public function getusersWithCategorie() : ? array {
    //     $users = array();
    //     $query      = RequetesUser::SELECT_user_WITH_CATEGORIE;
    //     try {
    //         $cursor  = $this->conn->query($query);
    //         // FETCH_OBJ pour obtenir la ligne sous forme d'un objet construit avec les cles correspondantes aux colonnes du select
    //         while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
    //             $type = new TypeUser($row->idC, $row->libelleC);
    //             $user = new User($row->idP, $row->libelleP, $row->prixP, $row->compoP, $row->pathImgP, $categorie);
    //             array_push($users,$user);
    //         }
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $users;
    // }

    // TODO : contrôles 
    // TODO : gestion des erreurs
    // public function getusersByCategorie(Categorie $categorie) : ? array{
    //     if (!isset($categorie)) throw new DaoException('Cette categorie est inexistante',8002);
    //     $query      = Requetes::SELECT_user_BY_CATEGORIE;
    //     try {
    //         $cursor  = $this->conn->prepare($query);
    //         $cursor->bindValue(1, $categorie->getId());
    //         $cursor->execute();
    //         // autre syntaxe
    //         // $cursor->execute([$categorie->getId()]);
    //         $users=[];
    //         while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
    //             $user = new user($row->idP, $row->libelleP, $row->prixP, $row->compoP, $row->pathImgP, $categorie);
    //             array_push($users,$user);
    //         }
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $users;
    // }

        /**
     * Retourne la liste des users de la BDD
     *
     * @return array : Tableau d'objets de type user
     */
    public function getTypeUser() : ? array {
        $typeUsers = array();
        $query      = RequetesUser::SELECT_Types;
        try {
            $cursor  = $this->conn->query($query);
            while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
                $typeUser = new TypeUser($row->type, $row->lib_type);
                array_push($typeUsers,$typeUser);
            }
        }
        catch (\Exception $e) {
            throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
        }
        return $typeUsers;
    }


    // TODO : contrôles 
    // TODO : gestion des erreurs
    public function getCategorieById(int $id) : ?TypeUser {
        if (!isset($id)) throw new DaoException('Cette categorie est inexistante',8002);
        $categorie = null;
        $query      = RequetesUser::SELECT_CATEGORIE_BY_ID;
        try {
            $query  = $this->conn->prepare($query);
            $query->execute(['id'=>$id]);
            // $categorie = $query->fetchObject('Categorie');  // il faut que nom colonne sql = nom proprietes instance
            $row = $query->fetch(\PDO::FETCH_OBJ);
            $categorie = new TypeUser($row->type, $row->lib_type);
        }
        catch (\Exception $e) {
            throw new \Exception('Exception User !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error User !!! : ' .  $error->getMessage());
        }
        return $categorie;
    }

        // TODO : contrôles 
    // TODO : gestion des erreurs
    public function getuserById(int $id) : ?user {
        if (!isset($id)) throw new DaoException('Ce user est inexistant',8003);
        $user       = null;
        $categorie  = null;
        $query      =RequetesUser::SELECT_User_BY_ID;
        try {
            $query  = $this->conn->prepare($query);
            $query->execute(['id'=>$id]);
            $row = $query->fetch(\PDO::FETCH_OBJ);
            // si pas de resultat alors $row = false : var_dump($row);
            if($row) {
                $type = new TypeUser($row->type, $row->lib_type);
                $user = new user($row->id, $row->nom_usr, $row->prenom_usr, $row->mail_usr, $row->date_compte, $row->tel_usr, $row->passw_usr, $row->ad1_usr, $row->ad2_usr, $row->code_post, $row->pathImgP, $type);
            }
        }
        catch (\Exception $e) {
            throw new \Exception('Exception user !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error User !!! : ' .  $error->getMessage());
        }
        return $user;
    }

    public function addUser(User $user) : bool {
        if (!isset($user)) throw new DaoException('Ce user est inexistant',8003);
        $query = RequetesUser::INSERT_User;
        try {
            $query  = $this->conn->prepare($query);
            $query->bindValue(':id',            $user->getId(),             \PDO::PARAM_INT);
            $query->bindValue(':nom_usr',       $user->getNom_usr(),        \PDO::PARAM_STR);
            $query->bindValue(':prenom_usr',    $user->getPrenom_usr(),           \PDO::PARAM_INT);
            $query->bindValue(':mail_usr',   $user->getMail_usr(),    \PDO::PARAM_STR);

            $query->bindValue(':date_compte',            $user->getDate_Compte(),             \PDO::PARAM_INT);
            $query->bindValue(':tel_usr',       $user->getTel_usr(),        \PDO::PARAM_STR);
            $query->bindValue(':passw_usr',    $user->getPassw_usr(),           \PDO::PARAM_INT);
            $query->bindValue(':ad1_usr',   $user->getAd1_usr(),    \PDO::PARAM_STR);
            $query->bindValue(':ad2_usr',     $user->getAd2_usr(),      \PDO::PARAM_STR);
            $query->bindValue(':code_post',     $user->getCode_Post(),      \PDO::PARAM_STR);

            $query->bindValue(':type',   $user->getCategorie()->getId(), \PDO::PARAM_INT);
            $response = $query->execute();  // response = 1 (true) si OK
            return $response;
        }
        catch (\Exception $e) {
            throw new \Exception('Exception User !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error User !!! : ' .  $error->getMessage());
        }
    }

    // TODO : contrôles 
    public function addCategorie(TypeUser $typeUser) {
        $query      = RequetesUser::INSERT_CATEGORIE;
        try {
            $statement  = $this->conn->prepare($query);
            $statement->bindValue(1, $typeUser->getId());
            $statement->bindValue(2, $typeUser->getLibelle());
            $statement->execute();
        }
        catch (\PDOException $pdoe) {
            // echo 'Erreur PDO : ' . $pdoe->getCode();
            // echo '<br>';
            // print_r ($pdoe->errorInfo);
            switch ($pdoe->errorInfo[1]) {
                case 1062:
                    if (str_contains($pdoe->errorInfo[2],"PRIMARY")) throw new DmException(MyExceptionCase::ID_DOUBLON);
                    if (str_contains($pdoe->errorInfo[2],"libelleC"))throw new DmException(MyExceptionCase::LIBELLE_DOUBLON);
                default:
                    throw $pdoe;
            } 
        } 
        catch (\Exception $e) {
            throw $e;
        }
        catch (\Error $error) {
            throw $error;
        } 
    }

    public function delCategorie(int $id) {
        $query      = RequetesUser::DELETE_CATEGORIE;
        try {
            $query  = $this->conn->prepare($query);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute();
        }
        catch (\PDOException $pdoe) {
            // echo 'Erreur PDO : ' . $pdoe->getCode();
            // echo '<br>';
            // print_r ($pdoe->errorInfo);
            switch ($pdoe->errorInfo[1]) {
                case 1451:
                    if (str_contains($pdoe->errorInfo[2],"FOREIGN KEY")) throw new DmException(MyExceptionCase::CATEGORIE_USE);
                default:
                    throw $pdoe;
            }
        } 
        catch (\Exception $e) {
            throw $e;
        }
        catch (\Error $error) {
            throw $error;
        } 
    }




    private function convertCode($code) : int { 
        $code = 8000;
        if (isset($code))   $code = (int)$code;
        return $code;
    }

    
}