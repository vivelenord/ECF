<?php
// Inclure les fichiers contenant les classes nécessaires
require_once('../src/metier/Commande.php');
require_once('../src/metier/Produit.php'); // Si nécessaire

// Vérifier si les données du formulaire sont soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $client = $_POST['client'];
    $produits = $_POST['produits']; // Si les produits sont sélectionnés dans le formulaire

    // Créer une instance de la classe Commande
    $commande = new PHP\metier\Commande($client);

    // Si des produits sont sélectionnés dans le formulaire, ajoutez-les à la commande
    if (!empty($produits)) {
        foreach ($produits as $produit) {
            // Créer une instance de la classe Produit (si nécessaire)
            $produit = new PHP\metier\Produit($produit['id'], $produit['nom'], $produit['prix']); // Utilisez les données réelles du produit
            // Ajouter le produit à la commande
            $commande->ajouterProduit($produit);
        }
    }

    // Enregistrez la commande dans la base de données ou effectuez d'autres opérations nécessaires
    // Exemple : $commande->enregistrer(); // Cette méthode devrait enregistrer la commande dans la base de données

    // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
    header("Location: confirmation_commande.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer une commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="container">

    <h1 class="display-4 text-center mt-5">Créer une commande</h1>

    <!-- Formulaire pour créer une commande -->
    <form action="creer_commande.php" method="post">
        <div class="mb-3">
            <label for="client" class="form-label">Client :</label>
            <input type="text" class="form-control" id="client" name="client" required>
        </div>
        <!-- Ajoutez des champs pour les produits si nécessaire -->
        <!-- Exemple :
        <div class="mb-3">
            <label for="produits" class="form-label">Produits :</label>
            <select multiple class="form-select" id="produits" name="produits[]" required>
                <option value="1">Produit 1</option>
                <option value="2">Produit 2</option>
                <option value="3">Produit 3</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
        </div>
        -->
        <button type="submit" class="btn btn-primary">Créer la commande</button>
    </form>

</div>

</body>

</html>
