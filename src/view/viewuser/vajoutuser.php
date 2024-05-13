<?php
    $title = 'Création de compte';

    ob_start();
    include './view/inc/incMenuBar.php';
    $menuBar = ob_get_clean();
?>

<?php ob_start(); ?>
<h1 class="my-3">Creation du compte</h1>
        <p id="message2" style="color: white;text-align: center;font-size: 25px"></p>
        <form class="row g-3" id="form-user" method="post" action="<?=APP_ROOT ?>/users/ajout">
            <?php foreach($typeUsers as $typeUser) { ?>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="choix" id="<?= $typeUser->getLibelle() ?>" value="<?= $typeUser->getId() ?>" checked>
                <label class="form-check-label" for="client"><?= $typeUser->getLibelle() ?></label>
            </div>
            <?php } ?>
            <p id="message"></p>
            <div class="col-md-4">
                <label for="id" class="form-label">Identifiant</label>
                <input type="text" name="id" class="form-control" id="id" value="1">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Nom</label>
                <input type="text" name="nom_usr" class="form-control" id="nom" value="Selmi">
            </div>

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Prénom</label>
                <input type="text" name="prenom_usr" class="form-control" id="prenom"  value="Francois">
            </div>
            <div class="col-4">
                <label for="inputAddress" class="form-label">Numéro de Téléphone</label>
                <input type="text" name="tel_usr" class="form-control" id="tel" placeholder="xx xx xx xx xx"  value="0612131415">
            </div>
            
            <div class="col-md-6">
                <label for="mail1" class="form-label">Adresse email</label>
                <input type="text" name="mail_usr" class="form-control" id="mail1"  value="Francois@gmail.com">
            </div>
            <div class="col-md-6">
                <label for="mail2" class="form-label">Confirmez votre email</label>
                <input type="text" name="mail_usr2" class="form-control" id="mail2" value="Francois@gmail.com">
            </div>
            <div class="col-md-6">
                <label for="passw1" class="form-label">Mot de passe</label>
                <input type="password" name="passw_usr" class="form-control" id="passw1" value="123456789">
            </div>
            <div class="col-md-6">
                <label for="passw2" class="form-label">Confirmez votre mot de passe</label>
                <input type="password" name="passw_usr" class="form-control" id="passw2" value="123456789">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Adresse</label>
                <input type="text" name="ad1_usr" class="form-control" id="inputAddress1" placeholder="Rue, numéro" value="12 rue machin">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Complément d'adresse</label>
                <input type="text" name="ad2_usr" class="form-control" id="inputAddress2" placeholder="Bat, Res, Chez." value="">
            </div>
    
            <label for="zoneSelect1" class="form-label">Département</label>
            <div class="col-6 display: flex">
                <select id="zoneSelect1" name="zoneSelect1" aria-label="Département">
                </select>
            </div>
            <div class="col-6 display: flex">
                <input type="button" class="form-control" id="rechercher" value="GO" />
            </div>
            <label for="zoneSelect2" class="form-label">Ville</label>
            <div class="col-6">
                <select id="zoneSelect2" name="code_post" aria-label="Ville">
                </select>
            </div>     
            <div class="col-6 display: flex">
                <input type="button" name="rechercher2" class="form-control" id="rechercher2" value="GO" />
            </div>
            
            <div class="col-12">
                <label class="ajoutphoto">Ajouter une photo de profil</label>
                <input type="file" name="pathImage" class="form-control-file" id="photoprofil">
            </div>

            <div class="col-10">
                <button class="btn btn-2 col-10 ms-5 mt-2 ps-3" id="soumettre" type="submit">Valider</button></div>
                <div class="mt-5"><?=$message ?></div>

            </div>
        </form>
        <!-- Fin du formulaire -->
<script defer type="module" src="<?= PUBLIC_ROOT . "/assets/js/pageCreationCompteV2.js" ?>"></script>
<?php $content = ob_get_clean(); ?>
<?php require('./view/base.php'); ?>