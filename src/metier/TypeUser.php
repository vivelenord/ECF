<?php
declare(strict_types=1);
namespace PHP\metier;

class TypeUser {
    private int     $id;
    private String  $libelle;

    public function __construct($id, $libelle) {
        $this->id       = $id;
        $this->libelle  = $libelle;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getLibelle(): String {
        return $this->libelle;
    }
    public function setLibelle(String $libelle) {
        $this->libelle = $libelle;
    }
    public function __toString() {
        return '[Categorie : '.$this->id . ',' . $this->libelle .']';
    }
}