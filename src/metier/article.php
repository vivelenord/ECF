<?php
declare(strict_types=1);
namespace PHP\metier;

class Article {
    private int $id;
    private string $nom;
    private float $prix;

    public function __construct(int $id, string $nom, float $prix) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrix(): float {
        return $this->prix;
    }
}
?>
