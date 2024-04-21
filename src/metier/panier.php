<?php
declare(strict_types=1);
namespace ECF\metier;

class Article {
    private int $id;
    private string $libelle;
    private float $prix;
    private string $description;
    // You can add other properties as needed (e.g., image path, stock quantity)
  
    public function __construct(int $id, string $libelle, float $prix, string $description) {
      $this->id = $id;
      $this->libelle = $libelle;
      $this->prix = $prix;
      $this->description = $description;
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
  
  }
  
  

class Panier {
    private array $articles;

    public function __construct() {
        $this->articles = [];
    }

    public function ajouterArticle(Article $article) {
        $this->articles[] = $article;
    }

    public function getArticles(): array {
        return $this->articles;
    }
}
?>

