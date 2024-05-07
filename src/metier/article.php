<?php
declare(strict_types=1);
namespace ECF\metier;

class Article {

    private int $id;
    private string $libelle;
    private float $prix;
    private string $description;
    private string $image;
    // You can add other properties as needed (e.g., image path, stock quantity)
  
    public function __construct(int $id, string $libelle, float $prix, string $description, ? string $image = '') {
      $this->id = $id;
      $this->libelle = $libelle;
      $this->prix = $prix;
      $this->description = $description;
      $this->image = $image;
    }
  
    // Getter methods for each property
    public function getId(): int {
      return $this->id;
    }
  
    public function getLibelle(): string {
      return $this->libelle;
    }
  
    public function getPrix(): float {
      return $this->prix;
    }
  
    public function getDescription(): string {
      return $this->description;
    }
  
    // TODO Setter libelle, prix, description - pas de setter pour id

    // TODO ToString

    public function getImage(): string {
        return $this->image;
    }
    public function setImage(string $image) {
        $this->image = $image;
    }
  }

