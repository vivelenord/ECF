<?php
// Inclure les fichiers contenant les classes nécessaires
require_once('../src/metier/Commande.php');

// Vérifier si l'identifiant de la commande à supprimer est passé en paramètre dans l'URL
if (isset($_GET['commande_id'])) {
    // Récupérer l'identifiant de la commande à supprimer depuis l'URL
    $commande_id = $_GET['commande_id'];

    // Créer une instance de la classe Commande à partir de son identifiant
    $commande = ECF\metier\Commande::recupererParId($commande_id);

    // Vérifier si la commande existe
    if ($commande) {
        // Supprimer la commande de la base de données ou effectuer d'autres opérations nécessaires
        // Exemple : $commande->supprimer(); // Cette méthode devrait supprimer la commande de la base de données

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
        header("Location: confirmation_suppression.php");
        exit;
    } else {
        // La commande n'existe pas, rediriger l'utilisateur vers une autre page appropriée
        header("Location: page_non_trouvee.php");
        exit;
    }
} else {
    // L'identifiant de la commande n'est pas spécifié dans l'URL, rediriger l'utilisateur vers une autre page appropriée
    header("Location: page_non_trouvee.php");
    exit;
}
?>
