function controlerSaisie() {
  var prixUnitaire = $("#prix-unitaire-{{produit.id}}").val();
  // Supprimez les caractères spéciaux comme '%'
  prixUnitaire = prixUnitaire.replace(/[^\d.]/g, '');
  // Mettez à jour la valeur dans l'élément input
  $("#prix-unitaire-{{produit.id}}").val(prixUnitaire);
}

// Ensuite, vous pouvez inclure vos tests QUnit

QUnit.test("Le sous-total est calculé correctement pour chaque produit", function() {
  const produit1 = {
      produit: "Nom produit 1",
      quantité: 2,
      prix: 50,
  };
  const produit2 = {
      produit: "Nom produit 2",
      quantité: 1,
      prix: 40,
  };

  equal(produit1.sous-total, 100);
  equal(produit2.sous-total, 40);
});

QUnit.test("Test qui vérifie et supprime les caractères spéciaux écrits par l'utilisateur", function() {
  // Appeler votre fonction de contrôle de saisie
  controlerSaisie();
  // Vérifier si la valeur a été correctement mise à jour
  equal($("#prix-unitaire-{{produit.id}}").val(), "10.2");
});