<?php
declare(strict_types=1);
namespace fav4\metier;

use PhpParser\Node\Expr\Cast\String_;
use fav4\metier\TypeUser;

class User {
    private int             $id;
    private String          $nom_usr;
    private String          $prenom_usr;
    private String          $mail_usr;
    private String          $date_compte;
    private int             $tel_usr;
    private String          $passw_usr;
    private String          $ad1_usr;
    private String          $ad2_usr;
    private int             $code_post;
    private ? String        $pathImage;
    private ? TypeUser      $type;
    

    public function __construct(int $id, String $nom_usr,String $prenom_usr,String $mail_usr,String $date_compte,int $tel_usr,String $passw_usr,String $ad1_usr,String $ad2_usr,int $code_post, String $pathImage, ? TypeUser $type) {
        $this->id           = $id;
        $this->nom_usr      = $nom_usr;
        $this->prenom_usr      = $prenom_usr;
        $this->mail_usr      = $mail_usr;
        $this->date_compte      = $date_compte;
        $this->tel_usr     = $tel_usr;
        $this->passw_usr     = $passw_usr;
        $this->ad1_usr     = $ad1_usr;
        $this->ad2_usr      = $ad2_usr;
        $this->code_post      = $code_post;
        $this->pathImage    = $pathImage;
        $this->type    = $type;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getNom_usr(): String {
        return $this->nom_usr;
    }
    public function setNom_usr(String $nom_usr) {
        $this->nom_usr = $nom_usr;
    }
    public function getPrenom_usr(): String {
        return $this->prenom_usr;
    }
    public function setPrenom_usr(String $prenom_usr) {
        $this->prenom_usr = $prenom_usr;
    }
    public function getMail_usr(): String {
        return $this->mail_usr;
    }
    public function setMail_usr(String $mail_usr) {
        $this->mail_usr = $mail_usr;
    }
    public function getDate_Compte(): String {
        return $this->date_compte;
    }
    public function setDate_Compte(String $date_compte) {
        $this->date_compte = $date_compte;
    }
    public function getTel_usr(): int {
        return $this->tel_usr;
    }
    public function setTel_usr(int $tel_usr) {
        $this->tel_usr = $tel_usr;
    }
    public function getPassw_usr(): String {
        return $this->passw_usr;
    }
    public function setPassw_usr(String $passw_usr) {
        $this->passw_usr = $passw_usr;
    }
    public function getAd1_usr(): String {
        return $this->ad1_usr;
    }
    public function setAd1_usr(String $ad1_usr) {
        $this->ad1_usr = $ad1_usr;
    }
    public function getAd2_usr(): String {
        return $this->ad2_usr;
    }
    public function setAd2_usr(String $ad2_usr) {
        $this->ad2_usr = $ad2_usr;
    }
    public function getCode_Post(): int {
        return $this->code_post;
    }
    public function setCode_Post(int $code_post) {
        $this->code_post = $code_post;
    }

   
    public function getPathImage(): String {
        return $this->pathImage;
    }
    public function setPathImage(String $pathImage) {
        $this->pathImage = $pathImage;
    }

    public function getCategorie(): TypeUser {
        return $this->type;
    }
    public function setCategorie(TypeUser $type) {
        $this->type = $type;
    }
        
    public function __toString() {
        return '[User : '. $this->id .', '. $this->type .', '. $this->getNom_usr() .', '. $this->getPrenom_usr() .', '. $this->getMail_usr() .', '. $this->getDate_Compte() .', '. $this->getTel_usr() .', ' . $this->getPassw_usr() .', ' . $this->getAd1_usr().', '. $this->getAd2_usr().', '. $this->getCode_Post() .', '. $this->getPathImage() . ']';
    }
}