let total = 0; // Déclaration et initialisation de la variable à 0
const table = document.getElementById("table-id");
const tauxTVA = 0.2;

const panier = [
  {
    produit: "Nom produit 1",
    image: "image1.jpg",
    quantité: 2,
    prix: 50,
    "sous-total": 2 * 50, // Calcul du sous-total
  },
  {
    produit: "Nom produit 2",
    image: "image2.jpg",
    quantité: 1,
    prix: 40,
    "sous-total": 1 * 40, // Calcul du sous-total
  },
];

// Calcul du total
function formaterPrix(prix) {
  // Fonction pour formater le prix avec deux chiffres après la virgule
  return prix.toFixed(2);
}

// Ajout d'une variable pour stocker le montant total HT
let montantTotalHT = 0;

for (const produit of panier) {
  const prixFormate = formaterPrix(produit.prix);
  montantTotalHT += prixFormate * produit.quantité;
}

const montantTotalHTElement = document.getElementById("montanttotalht");
montantTotalHTElement.value = montantTotalHT;

function calculerMontantTTC(montantHT, tauxTVA) {
  return montantHT + (montantHT * tauxTVA);
}


// Calcul du montant total TTC
const montantTotalTTC = calculerMontantTTC(montantTotalHT, tauxTVA);


// Affichage du total dans la console
console.log(`Total HT : ${montantTotalHT}`);
console.log(`Total TTC : ${montantTotalTTC.toFixed(2)}`);

// Affichage du tableau avec formatage
console.table(panier);

function formaterPrix(prix) {
  // Fonction pour formater le prix avec deux chiffres après la virgule

  if (typeof prix === "number" && !isNaN(prix)) {
    // Si le prix est un nombre valide
    return prix.toFixed(2);
  } else {
    // Si le prix n'est pas un nombre valide
    return 0;
  }
}

// Affichage du tableau avec formatage personnalisé
console.log("Produit | Image | Quantité | Prix Unitaire | SousTotal");
for (const produit of panier) {
  // Vérification des valeurs et conversion si nécessaire
  const prix = typeof produit.prix === "number" ? produit.prix : parseFloat(produit.prix);
  const sousTotal =
    typeof produit.sous-total === "number"
      ? produit.sous-total
      : parseFloat(produit.sous-total);

  // Affichage des valeurs formatées
  console.log(
    `${produit.produit} | ${produit.image} | ${produit.quantité} | ${formaterPrix(
      prix
    )} | ${formaterPrix(sousTotal)}`
  );
}