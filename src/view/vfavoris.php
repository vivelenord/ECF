<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <title> Shopart:market place pour les artisans</title>
   <link rel="stylesheet" href="assets/CSS/favoris.css">

  </head>
<body>
   <!-- ----------------------------navbar------------------------------------- -->
 <nav class="rounded-bottom" id="navbar">
    <div class="" id="fixe">
      <a href=""><img src="assets/images/logoshopart.jpg" alt="Logo">Shopart</a>
     </div>
     <div class="conteneur" id="boutons">
       <button class="elem bouton_nav btn-warning"><a class="" href="#">Categorie</a></button>
       <div class="conteneur" id="form">
         <form class="d-flex">
           <input class="form-control me-2" type="text" id="recherche" placeholder="Rechercher un produit ou un artisants" aria-label="Rechercher">
            <button class="btn rounded-3 bg-white elem" id="rechercher" type="submit">Rechercher</button>
          </form>
        </div>
       <button class="elem bouton_nav btn-warning"><a class="" href="#">Artisant</a></button>
       <button class="elem bouton_nav btn-warning"><a class="" href="#">Client</a></button>
       <button type="button" class="elem bouton_nav btn bg-warning">Favoris<span class="badge text-btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
        </svg></span>
       </button>
       <button class="elem bouton_nav btn-warning"><a class="" href="#">Panier</a></button>

    </div>
 </nav>
   <!-- ----------------------------/navbar------------------------------------- -->
        <div class="box2">
            <div>
              <br>
              <a class="prembar btn-warning" href="#"><form class="cherchicone">
                <i class="fa-solid fa-magnifying-glass"></i>
                <!-- <input placeholder="Chercher par categories" type="text" id="chercher2"> -->
             </form>
             <div id="filter"><br>
                <span>Trier par :</span>
                 <select name="" id="select-tag">
                    <option value=""></option>
                    <option value="prix le plus bas">prix le plus bas</option>
                    <option value="prix le plus eleve">prix le plus eleve</option>
                </select>
            </div></a>  
            </div>
            <div id="favori"></div>
        </div> 
    <!-- --------------------boostrapcard------------------- -->
    <br>
 <div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/12.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chapeau</h5>
    <p class="card-text">Chapeau en paille.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------2eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/cat-han-Ks6wd1Zyf1o-unsplash.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bijoux</h5>
    <p class="card-text">Collier plaqué or.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------3eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/alla_home_vintage-a0xveVpTFho-unsplash.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Broderie</h5>
    <p class="card-text">Broderie à la main.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------4eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/arwa-musallam-0rDzUNngpDw-unsplash.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Broderie</h5>
    <p class="card-text">Tableau en broderie.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------5eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/alexander-andrews-1-AksyuqM4k-unsplash.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Broderie</h5>
    <p class="card-text">Chemise broder.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------6eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/17.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chapeau</h5>
    <p class="card-text">Chapeau en paille.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 
<!-- ------------------7eme card--------------------------- -->
<div class="card" style="width: 15rem;">
  <br>
  <img src="assets/images/images-acceuil/andres-vera-202NAwjisYA-unsplash.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bijoux</h5>
    <p class="card-text">Colliers plaqué or.</p>
    <p class="card-text">prix: 20$.</p>
  </div>
  <input type="radio"  class ="btradio" name="select" id="selection" value="select" ><label for="selected"></label><br>
  <a href="#" class="boutonmodifier btn-warning">Modifier</a>
  <a href="#" class="boutonsup btn-warning">Supprimer</a>
  <a href="#" class="btnquanti ">Quantité choisis</a>

  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul> -->
  <div class="card-body">
    <a href="#" class="retourpageartisan">Retour page Artisant</a>
  </div>
</div> 

 <!-- --------------------------------------------------------------------------------- --> -->
 <br>
 <a class="affichage btn-warning" href="#">Recherches précedentes"nomé par thème"...</a>  
 <div class="slider">
   <div class="slide-track">
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus1.jpg" alt="">
    </div>
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus2.jpg" alt="">
    </div>
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus3.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/images/images-acceuil/chaus4.jpg" alt="">
    </div>
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus5.jpg" alt="">
     </div>
     <div class="slide">
       <img src="assets/images/images-acceuil/chaus6.jpg" alt="">
     </div>
     <div class="slide">
      <img src="assets/images/images-acceuil/chaus7.jpg" alt="">
     </div>
     <div class="slide">
      <img src="assets/images/images-acceuil/chaus8.jpg" alt="">
     </div>
     <div class="slide">
       <img src="assets/images/images-acceuil/chaus9.jpg" alt="">
    </div>

    <div class="slide">
      <img src="assets/images/images-acceuil/chaus10.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/images/images-acceuil/chaus11.jpg" alt="">
    </div>
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus12.jpg" alt="">
    </div>
    <div class="slide">
       <img src="assets/images/images-acceuil/chaus13.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/images/images-acceuil/chaus14.jpg" alt="">
     </div>
     <div class="slide">
       <img src="assets/images/images-acceuil/chaus15.jpg" alt="">
     </div>  
   </div>
 </div>

<!-- -----------------------footer------------------------------------- -->
       <!-- Copyright -->
       <div>
        <footer>
           <div class="text-center p-3 fixed-bottom" style="background-color:  rgba(208, 97, 28, 0.265);">
              © 2024 Copyright:
              <a class="text-reset fw-bold" href="">Farah ❤️--- Groupe 2 ---</a>
           </div>
            <!-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/logo-white.png" class="bi" width="24" height="24"></a></li>
              <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/01  Gradient Glyph/Instagram_Glyph_Gradient.png"  class="bi" width="24" height="24"></a></li>
              <li class="mx-3"><a class="text-body-secondary" href="#"><img src="./assets/images/icons8-facebook.png"  class="bi" width="30" height="30"></a></li>
            </ul> -->
          </footer>
        </div>
        <!-- Copyright -->
           <!-- --------------------------------------------------------- -->
     <script src="assets/js/script.js"></script>
</body>
</html>