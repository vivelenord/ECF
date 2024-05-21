<?php

$title = 'Informations sur cet utilisateur';

ob_start();
include './view/inc/incMenuBar.php';
$menuBar = ob_get_clean();
?>

<?php ob_start(); ?>
<h1 class="my-3">Utilisateur numéro : <?= $user->getId() ?></h1>
        <div class="d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
                <?php if ($user->getPathImage() != null) { ?>
                    <?php echo($user->getPathImage())?>
                    <img src="<?= PUBLIC_ROOT . '/assets/images/users/' . $user->getPathImage() ?>" class="card-img-top"  height="300px" width="300px" alt="Image du user <?=$user->getNom_usr() ?>">
                <?php } ?>
                
                <div class="card-body">
                    <h5 class="card-title"><?= $user->getNom_usr() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Propriétaire : <?= $user->getId() . ' - ' . $user->getNom_usr() . ' - ' . $user->getPrenom_usr() ?></h6>
                    <p class="card-text">Utilisateur numéro : <?= $user->getId() ?></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email : <?= $user->getMail_usr() ?></li>
                        <li class="list-group-item">Téléphone : <?= $user->getTel_usr() ?></li>
                        <li class="list-group-item">Type d'utilisateur : <?= $user->getCategorie()->getId() ?></li>                        <li class="list-group-item">Créé le <?= $user->getDate_Compte() ?></li>
                        <li class="list-group-item"></li>
                        <li><a href="#" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> </li>
                    </ul>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-primary btn-sm">Editer</a>
                        <form class="mb-0" method="post" action="<?=APP_ROOT ?>/users/suppression">
                            <input type='hidden' name='id' value='<?= $user->getId() ?>'>
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p><?= (isset($message))? $message : '' ?></p>
<?php $content = ob_get_clean(); ?>
<?php require('./view/base.php'); ?>