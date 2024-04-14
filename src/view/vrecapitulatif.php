
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Récapitulatif de commande</title>
    <link rel="stylesheet" href="/assets/CSS/depot_annonce.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<nav class="rounded-bottom" id="navbar">
    <div class="" id="fixe">
      <a href=""><img src="assets/images/logoshopart.jpg" alt="Logo">Shopart</a>
     </div>
     <div class="conteneur" id="boutons">
       <button class="elem bouton_nav btn-warning"><a class="" href="#">Categorie</a></button>
         <div class="conteneur" id="form">
           <form class="d-flex">
             <input class="form-control me-2" type="text" id="recherche" placeholder="Rechercher un produit ou un artisan" aria-label="Rechercher">
              <button class="btn rounded-3 bg-white elem" id="rechercher" type="submit">Rechercher</button>
           </form>
        
           <div>
             <button class="coeurfav"></button>
           </div>
           <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.html">Login Artisan</a></button>
           <button class="elem bouton_nav btn-warning"><a class="" href="PageConnexion.html">Login Client</a></button>
           <!-- <button type="button" class="elem bouton_nav btn bg-warning" href="#">Favoris<span class="badge text-btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
             <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
             </svg></span>
           </button> -->
           <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
         </div>
     </div>
   </nav>
<body>

<div class="container">

    <h1 class="display-4 text-center mt-5">Facturation</h1>

    <table class="table table-bordered mx-auto col-md-8">
        <thead>
            <tr>
                <th class="col-md-5">Produit</th>
                <th class="col-md-2">Quantité</th>
                <th class="col-md-2">Prix unitaire</th>
                <th class="col-md-3">Sous-total</th>
            </tr>
        </thead>
        <tbody id="tbody-commande"></tbody>
    </table>

    <div class="row mt-5">
        <div class="col-md-6">
            <p class="lead">
                <strong>Total HT</strong> : <span id="totalHT" class="text-danger"></span> €
            </p>
        </div>
        <div class="col-md-6 text-end">
            <p class="lead">
                <strong>Frais de livraison</strong> : <span id="fraisLivraison" class="text-danger"></span> €
            </p>
            <p class="lead">
                <strong>Total TTC</strong> : <span id="totalTTC" class="text-danger"></span> €
            </p>
        </div>
    </div>

    <h2 class="mt-5">Adresse de livraison</h2>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Pays</td>
                <td><input type="text" name="pays" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Code postal</td>
                <td><input type="text" name="code_postal" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Numéro et Rue</td>
                <td><input type="text" name="rue" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Adresse e-mail</td>
                <td><input type="email" name="email" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td><input type="tel" name="telephone" value="[valeur pré-remplie]" class="form-control"></td>
            </tr>
        </tbody>
    </table>

    <button type="button" onclick="window.location.href='pagedepaiement.html'" class="btn btn-primary btn-lg mt-5">Valider la commande</button
</body>
</html>