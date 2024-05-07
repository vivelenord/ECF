<?php
    $title = 'Accueil';

    ob_start();
    include './view/inc/incMenuBar.php';
    $menuBar = ob_get_clean();
?>

<?php ob_start(); ?>
<h1 class="my-3">Accueil Market place</h1>
<?php $content = ob_get_clean(); ?>

<?php require('./view/base.php'); ?>