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
class DaoResto {

    private \PDO $conn;

    public function __construct() {
        try {
            $this->conn = DatabaseUser::getConnection();
        } catch (\Exception $e) {
            $conn = null;
        }
    }

    /**
     * Retourne la liste des plats de la BDD
     *
     * @return array : Tableau d'objets de type Plat
     */
    public function getUsers() : ? array {
        $plats = array();
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

    // public function getPlatsWithCategorie() : ? array {
    //     $users = array();
    //     $query      = RequetesUser::SELECT_PLAT_WITH_CATEGORIE;
    //     try {
    //         $cursor  = $this->conn->query($query);
    //         // FETCH_OBJ pour obtenir la ligne sous forme d'un objet construit avec les cles correspondantes aux colonnes du select
    //         while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
    //             $type = new TypeUser($row->idC, $row->libelleC);
    //             $user = new User($row->idP, $row->libelleP, $row->prixP, $row->compoP, $row->pathImgP, $categorie);
    //             array_push($plats,$plat);
    //         }
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $plats;
    // }

    // TODO : contrôles 
    // TODO : gestion des erreurs
    // public function getPlatsByCategorie(Categorie $categorie) : ? array{
    //     if (!isset($categorie)) throw new DaoException('Cette categorie est inexistante',8002);
    //     $query      = Requetes::SELECT_PLAT_BY_CATEGORIE;
    //     try {
    //         $cursor  = $this->conn->prepare($query);
    //         $cursor->bindValue(1, $categorie->getId());
    //         $cursor->execute();
    //         // autre syntaxe
    //         // $cursor->execute([$categorie->getId()]);
    //         $plats=[];
    //         while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
    //             $plat = new Plat($row->idP, $row->libelleP, $row->prixP, $row->compoP, $row->pathImgP, $categorie);
    //             array_push($plats,$plat);
    //         }
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $plats;
    // }

        /**
     * Retourne la liste des plats de la BDD
     *
     * @return array : Tableau d'objets de type Plat
     */
    public function getTypeUser() : ? array {
        $typeUsers = array();
        $query      = RequetesUser::SELECT_Types;
        try {
            $cursor  = $this->conn->query($query);
            while ($row = $cursor->fetch(\PDO::FETCH_OBJ)) {
                $typeUser = new TypeUser($row->idC, $row->libelleC);
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
    // public function getCategorieById(int $id) : ?Categorie {
    //     if (!isset($id)) throw new DaoException('Cette categorie est inexistante',8002);
    //     $categorie = null;
    //     $query      = Requetes::SELECT_CATEGORIE_BY_ID;
    //     try {
    //         $query  = $this->conn->prepare($query);
    //         $query->execute(['id'=>$id]);
    //         // $categorie = $query->fetchObject('Categorie');  // il faut que nom colonne sql = nom proprietes instance
    //         $row = $query->fetch(\PDO::FETCH_OBJ);
    //         $categorie = new Categorie($row->idC, $row->libelleC);
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $categorie;
    // }

        // TODO : contrôles 
    // TODO : gestion des erreurs
    // public function getPlatById(int $id) : ?Plat {
    //     if (!isset($id)) throw new DaoException('Ce plat est inexistant',8003);
    //     $plat       = null;
    //     $categorie  = null;
    //     $query      =Requetes::SELECT_PLAT_BY_ID;
    //     try {
    //         $query  = $this->conn->prepare($query);
    //         $query->execute(['id'=>$id]);
    //         $row = $query->fetch(\PDO::FETCH_OBJ);
    //         // si pas de resultat alors $row = false : var_dump($row);
    //         if($row) {
    //             $categorie = new Categorie($row->idC, $row->libelleC);
    //             $plat = new Plat($row->idP, $row->libelleP, $row->prixP, $row->compoP, $row->pathImgP, $categorie);
    //         }
    //     }
    //     catch (\Exception $e) {
    //         throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
    //     }
    //     catch (\Error $error) {
    //         throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
    //     }
    //     return $plat;
    // }

    public function addPlat(Plat $plat) : bool {
        if (!isset($plat)) throw new DaoException('Ce plat est inexistant',8003);
        $query = Requetes::INSERT_PLAT;
        try {
            $query  = $this->conn->prepare($query);
            $query->bindValue(':id',            $plat->getId(),             \PDO::PARAM_INT);
            $query->bindValue(':libelle',       $plat->getLibelle(),        \PDO::PARAM_STR);
            $query->bindValue(':prix',          $plat->getPrix(),           \PDO::PARAM_INT);
            $query->bindValue(':composition',   $plat->getComposition(),    \PDO::PARAM_STR);
            $query->bindValue(':pathImage',     $plat->getPathImage(),      \PDO::PARAM_STR);
            $query->bindValue(':idCategorie',   $plat->getCategorie()->getId(), \PDO::PARAM_INT);
            $response = $query->execute();  // response = 1 (true) si OK
            return $response;
        }
        catch (\Exception $e) {
            throw new \Exception('Exception RESTAU !!! : ' .  $e->getMessage() , $this->convertCode($e->getCode()));
        }
        catch (\Error $error) {
            throw new \Exception('Error RESTAU !!! : ' .  $error->getMessage());
        }
    }

    // TODO : contrôles 
    public function addCategorie(Categorie $categorie) {
        $query      = Requetes::INSERT_CATEGORIE;
        try {
            $statement  = $this->conn->prepare($query);
            $statement->bindValue(1, $categorie->getId());
            $statement->bindValue(2, $categorie->getLibelle());
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
        $query      = Requetes::DELETE_CATEGORIE;
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