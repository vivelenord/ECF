<?php
declare(strict_types=1);
namespace ECF\metier;

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

