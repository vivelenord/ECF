<?php

$title = 'Les users';

ob_start();
include './view/inc/incMenuBar.php';
$menuBar = ob_get_clean();
?>

<?php ob_start(); ?>
<h1 class="my-3 mb-5">Les users</h1>
        <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mail</th>
                <th>TypeUser</th>
                <th>User</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                <tr>
                    <th scope="row"><?= $user->getId() ?></th>
                    <td><?= $user->getNom_usr() ?></td>
                    <td><?= $user->getPrenom_usr() ?></td>
                    <td><?= $user->getMail_usr() ?></td>
                    <td><?= ($user->getCategorie() != null)? $user->getCategorie()->getId() . ' - ' . $user->getCategorie()->getId() : '' ?></td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a class='btn btn-primary btn-sm' href="<?=APP_ROOT ?>/users/one?id=<?= $user->getId() ?>">Voir</a>
                            <a class='btn btn-primary btn-sm' href="#">Editer</a>
                            <form class="mb-0" method="post" action="<?=APP_ROOT ?>/users/suppression">
                                <input type='hidden' name='id' value='<?= $user->getId() ?>'>
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php $content = ob_get_clean(); ?>
<?php require('./view/base.php'); ?>






 