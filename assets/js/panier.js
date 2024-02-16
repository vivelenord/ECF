function calculTotal() {
	// Initialise la variable montantTotal à 0
	var montantTotal = 0;
  
	// Vérifie si le panier est vide
	if (produits.length === 0) {
	  // Le panier est vide
	  produits.push({
		nom: "Nom produit 1",
		prix: 50,
		quantite: 2
	  });
	} else {
	  // Calcul du montant total HT
	  for (var i = 0; i < produits.length; i++) {
		montantTotal += produits[i].quantite * produits[i].prix;
	  }
  
	  // Calcul du montant total TTC
	  var montantTTC = Math.round(montantTotal * 1.2);
  
	  // Met à jour la valeur de la variable montantTotal
	  document.getElementById("montanttotal").value = montantTTC;
  
	  // Affiche le montant total TTC
	  document.getElementById("montanttotalttc").innerHTML = "Montant total TTC : " + montantTTC;
	}
  
	// Affiche la valeur de la variable produits.isEmpty()
	console.log(produits.isEmpty());
  }