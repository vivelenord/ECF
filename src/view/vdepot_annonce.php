<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déposer une annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/depot_annonce.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="mx-auto">
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
               <button class="elem bouton_nav btn-warning"><a class="" href="ModifSuppCompte.html"><i class="fa-solid fa-user"></i>Gérer mon compte</a></button>
               <button class="elem bouton_nav btn-warning"><a class="" href="acceuil.html"><i class="fa-solid fa-right-from-bracket"></i>Déconnexion</a></button>
               <!-- <button type="button" class="elem bouton_nav btn bg-warning" href="#">Favoris<span class="badge text-btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
                 </svg></span>
               </button> -->
               <button class="elem bouton_nav btn-warning"><a class="" href="panier.html">Panier</a></button>
             </div>
         </div>
       </nav>

    <main>
        <h1 class="mb-4 text-center pb-4"><span class="py-1 px-3 pb-2">Déposez votre annonce :</span></h1>
        <div id="formulaire_depot">
            <form class="d-flex flex-column p-4" action="validation.html" method="post">
                <div class="d-flex flex-row">
                    <div class="d-flex flex-column px-3 col-6">
                        <div class="mb-2">
                            <label for="title">Titre de l'annonce:</label>
                            <input class="form-control mt-2" type="text" id="title" name="title" required>
                        </div>
                        <div class="d-flex flex-row" >
                            <div class="flex-grow-1 me-3 ">
                                <label for="category">Catégorie:</label>
                                <select class="form-select mt-2" id="category" name="category" required>
                                    <option value="art">Art</option>
                                    <option value="bijoux">Bijoux</option>
                                    <option value="cosmetique">Cosmetique</option>
                                    <option value="decoration">Décoration</option>
                                    <option value="textile">Textile</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            <div class=" ">
                                <label for="price">Prix (en euros):</label>
                                <input class="form-control mt-2" type="number" id="price" name="price" min="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-3">
                        <label for="description">Description:</label>
                        <textarea class="form-control mt-2" id="description" name="description" rows="4" required></textarea>    
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-3 col-6 text-center" id="infos_contact">
                        <div class="my-2">
                            <div>
                                <label>Adresse e-mail :</label>
                            </div>
                            <div class="btn-group mt-2">
                                <input class="btn-check" type="radio" id="mail_visible" name="mail">
                                <label class="btn btn-outline-light radio" for="mail_visible">Visible </label>
                                <input class="btn-check" type="radio" id="mail_cachee" name="mail" checked>
                                <label class="btn btn-outline-light radio" for="mail_cachee">Cachée</label >
                            </div>
                        </div>
                        <div class="my-3">
                            <div>
                                <label>Numéro de téléphone :</label>
                            </div>
                            <div class="btn-group mt-2">
                                <input class="btn-check " type="radio" id="telephone_visible" name="telephone">
                                <label class="btn btn-outline-light radio" for="telephone_visible">Visible </label>
                                <input class="btn-check " type="radio" id="telephone_cachee" name="telephone" checked>
                                <label class="btn btn-outline-light radio" for="telephone_cachee">Caché</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-3 d-flex flex-column ">
                        <label for="input_photo" class="pb-2">Inserez les images / photos de l'annonce : </label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="input_photo" aria-describedby="inserer_photo" aria-label="Upload">
                            <button class="btn btn-outline-secondary" type="button" id="inserer_photo" onclick="afficherImage()">Valider</button>
                        </div>
                        <div id="save_images">

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="elem " value="Déposer l'annonce">
                </div>
            </form>
        </div>
    </main>
</body>
<script>
    function afficherImage() {
        console.log("ok")
        var cheminImage = document.querySelector("#input_photo").value;
        document.querySelector("#save_images").innerHTML+=`<p>Vous avez ajouter l'image : ${cheminImage}.`; //<img id='affichageImage' src='${cheminImage}' alt='Image affichée'>
    }
  </script>
</html>