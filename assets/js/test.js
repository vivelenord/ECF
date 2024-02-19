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
       $("#prix-unitaire-{{produit.id}}").val("10,2%");
       $("#calculerMontantTotalHT").change();  
       equal($("#prix-unitaire-{{produit.id}}").val(), "10.2");
  });