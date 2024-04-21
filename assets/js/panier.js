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

const tauxTVA = 0.2; // Taux de TVA

// Calcul du montant total hors taxe (HT)
let montantTotalHT = 0;
for (const produit of panier) {
  montantTotalHT += produit["sous-total"];
}

// Calcul du montant total TTC
const montantTotalTTC = montantTotalHT * (1 + tauxTVA);

// Affichage du total HT dans la console
console.log("Total HT : " + montantTotalHT.toFixed(2));

// Affichage du total TTC dans la console
console.log("Total TTC : " + montantTotalTTC.toFixed(2));

// Affichage du tableau de panier dans la console avec formatage personnalisé
console.log("Produit | Image | Quantité | Prix Unitaire | Sous-Total");
for (const produit of panier) {
  console.log(
    `${produit.produit} | ${produit.image} | ${produit.quantité} | ${produit.prix.toFixed(2)} | ${produit["sous-total"].toFixed(2)}`
  );
}
