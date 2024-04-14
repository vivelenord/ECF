<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déposer une annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/validation.css">
</head>
<body class="mx-auto">
    <nav class="rounded-bottom" id="navbar">
        <div class="" id="fixe">
            <a href="">
                <img src="assets/images/logo.jpg" alt="Logo">
                Shopart
            </a>
        </div>
        <div class="conteneur" id="boutons">
            <button class="elem bouton_nav bg-white">
                <a class="" href="#">Accueil</a>
            </button>
            <button class="elem bouton_nav bg-white">
                <a class="" href="#">Services</a>
            </button>
            <button class="elem bouton_nav bg-white">
                <a class="" href="#">Panier</a>
            </button>
            <button class="elem bouton_nav bg-white">
                <a class="" href="#">Connexion</a>
            </button>
        </div>
        <div class="conteneur" id="form">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn rounded-3 bg-white elem" id="rechercher" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
    <main>

        <h1 class="mb-4 text-center"><span class="py-1 px-3">Récapitulatif</span></h1>

        <div class="d-flex flex-column pb-4" id="recap">

            <div class="d-flex gap-1 p-3 m-2" >
                <div class="col-6 fs-5 div_recap" id="text">
    
                    <h2 class="fs-4 text-center my-4">Détails de l'annonce : </h2>
                    <div class=" p-3">
                        <p class="pt-2" id="titre">Titre de l'annonce : </p>
                        <p id="categorie">Catégorie :</p>
                        <p id="prix">Prix :</p>
                        <p id="desc">Description :</p>
                        <p id="mail">Adresse mail :</p>
                        <p id="numero">Numéro de téléphone :</p>
                    </div>
    
    
                </div>
    
                <div class="col-6 div_recap " id="images">
    
                    <h2 class="fs-4 text-center my-4">Images de l'annonce : </h2>
    
                    <div id="reglage_images" class="d-flex flex-wrap gap-3 ">
                        <div class="image_recap" ></div>
                        <div class="image_recap" ></div>
                        <div class="image_recap" ></div>
                        <div class="image_recap" ></div>
                        <div class="image_recap" ></div>
                        <div class="image_recap" ></div> 
                        <div class="image_recap" ></div> 
                        <div class="image_recap" ></div> 
                    </div>
    
                </div>
            </div>

            <div class="m-auto">
                <button type="button" class="elem">Valider l'annonce</button>
            </div>

        </div>


    </main>
</body>
</html>