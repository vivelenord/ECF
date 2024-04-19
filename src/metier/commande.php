<?php
declare(strict_types=1);
namespace PHP\metier;

class Commande {
    private int $id;
    private array $articles;
    private float $montantTotal;
    private string $statut;

    public function __construct(int $id, array $articles, float $montantTotal, string $statut) {
        $this->id = $id;
        $this->articles = $articles;
        $this->montantTotal = $montantTotal;
        $this->statut = $statut;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getArticles(): array {
        return $this->articles;
    }

    public function getMontantTotal(): float {
        return $this->montantTotal;
    }

    public function getStatut(): string {
        return $this->statut;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setArticles(array $articles): void {
        $this->articles = $articles;
    }

    public function setMontantTotal(float $montantTotal): void {
        $this->montantTotal = $montantTotal;
    }

    public function setStatut(string $statut): void {
        $this->statut = $statut;
    }
}