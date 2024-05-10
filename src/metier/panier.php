<?php
declare(strict_types=1);
namespace fav4\metier;
  
class Panier {

    private int $id;
    private array $articles;
    private User $user;

    public function __construct(int $id, ? User $user) {
        $this->id = $id;
        $this->user = $user;
        $this->articles = [];
    }

    public function ajouterArticle(Article $article) {
        $this->articles[] = $article;
    }

    public function getArticles(): array {
        return $this->articles;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getUser(): User {
        return $this->user;
    }
    public function setUser( ? User $user) {
        $this->user = $user;
    }

    public function __toString() {
        return '[Categorie : '.$this->id . ',' . $this->libelle .']';
    }
}
public function __toString(): string // Ensure the method returns a string
    {
        return '[Panier: ' . $this->id . ', User: ' . ($this->user ? $this->user->__toString() : 'Not Set') . ']';
     }
}