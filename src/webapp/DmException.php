<?php
namespace restoV5b\webapp;

enum MyExceptionCase {
    case ID_MUST_BE_NUMERIC;
    case MIN_LONGUEUR_3;
    case PRIX_MUST_BE_NUMERIC;
    case PRIX_MUST_BE_POSITIF;
    case ID_DOUBLON;
    case LIBELLE_DOUBLON;
    case FK_CATEGORIE;
    case CATEGORIE_USE;
    case USER_ERREUR;
    case CATEGORIE_INVALIDE;
    case PLAT_ID_DOUBLON;
    case PLAT_LIBELLE_DOUBLON;
}

class DmException extends \Exception {
    function __construct(private MyExceptionCase $case){
        match($case){
            MyExceptionCase::PLAT_ID_DOUBLON        =>    parent::__construct("Cet identifiant existe déjà", 101),
            MyExceptionCase::PLAT_LIBELLE_DOUBLON   =>    parent::__construct("Ce nom de plat existe déjà", 201),
            MyExceptionCase::PRIX_MUST_BE_NUMERIC   =>    parent::__construct("Le prix doit être un nombre en centimes", 300),
            MyExceptionCase::PRIX_MUST_BE_POSITIF   =>    parent::__construct("Le prix doit être supérieur à zéro", 301),
            MyExceptionCase::FK_CATEGORIE           =>    parent::__construct("Erreur de sélection de la catégorie", 400),
            MyExceptionCase::CATEGORIE_INVALIDE     =>    parent::__construct("La catégorie est invalide !!", 401),            
            MyExceptionCase::CATEGORIE_USE          =>    parent::__construct("La catégorie est utilisée par des plats. Vous ne pouvez la supprimer.", 402),            
            MyExceptionCase::ID_MUST_BE_NUMERIC     =>    parent::__construct("L'identifiant doit être un entier numérique", 800),
            MyExceptionCase::MIN_LONGUEUR_3         =>    parent::__construct("Le nom doit contenir au moins 3 caractères", 801),
            MyExceptionCase::ID_DOUBLON             =>    parent::__construct("Cet identifiant existe déjà", 803),
            MyExceptionCase::LIBELLE_DOUBLON        =>    parent::__construct("Ce nom existe déjà", 804),
            MyExceptionCase::USER_ERREUR            =>    parent::__construct("Erreur inattendue !!", 999),
        };
    }
}