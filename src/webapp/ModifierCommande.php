<?php
// Inclure les fichiers contenant les classes nécessaires
require_once('../src/metier/Commande.php');
require_once('../src/metier/Produit.php'); // Si nécessaire

// Vérifier si les données du formulaire sont soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'identifiant de la commande à modifier depuis le formulaire
    $commande_id = $_POST['commande_id'];

    // Récupérer les données mises à jour de la commande depuis le formulaire
    $nouveau_client = $_POST['nouveau_client'];
    $nouveaux_produits = $_POST['nouveaux_produits']; // Si les produits sont modifiés dans le formulaire

    // Créer une instance de la classe Commande à partir de son identifiant
    $commande = ECF\metier\Commande::recupererParId($commande_id);

    // Mettre à jour les données de la commande
    $commande->setClient($nouveau_client);

    // Si les produits sont modifiés dans le formulaire, mettez à jour les produits de la commande
    if (!empty($nouveaux_produits)) {
        // Réinitialiser les produits de la commande
        $commande->resetProduits();

        foreach ($nouveaux_produits as $produit) {
            // Créer une instance de la classe Produit (si nécessaire)
            $produit = new ECF\metier\Produit($produit['id'], $produit['nom'], $produit['prix']); // Utilisez les données réelles du produit
            // Ajouter le produit à la commande
            $commande->ajouterProduit($produit);
        }
    }

    // Enregistrer les modifications de la commande dans la base de données ou effectuer d'autres opérations nécessaires
    // Exemple : $commande->enregistrer(); // Cette méthode devrait mettre à jour la commande dans la base de données

    // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
    header("Location: confirmation_modification.php");
    exit;
}

// Si les données de la commande à modifier ne sont pas fournies, rediriger l'utilisateur vers une autre page appropriée
header("Location: page_non_trouvee.php");
exit;
?>
