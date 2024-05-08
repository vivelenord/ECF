<?php
namespace ECF;
use ECF\controller\CntrlMarketPlace;
require_once 'C:\htppd\XAMMP\htdocs\FS\POO\ECF\vendor\autoload.php';

// recuperation de la config - lie au fait que je n'ouvre pas vscode a la racine du projet
if (file_exists("./param.ini")) {
    $param = parse_ini_file("./param.ini", true);
    extract($param['APPWEB']);     // extract du tag [CONFIG] et génère les variables du nom donne dans param.ini          
} 
// define('APP_ROOT',$app_root_apache);         // /travailDM/6-phpMVC/demofavoris/src1 pour apache de xampp
// define('PUBLIC_ROOT',$public_root_apache);   // /travailDM/6-phpMVC/demofavoris/src1 pour apache de xampp
define('APP_ROOT',$app_root_phpserver);         // /6-phpMVC/demofavoris/src1 pour phpserver depuis TravailDM
define('PUBLIC_ROOT',$public_root_phpserver);   // /6-phpMVC/demofavoris/src1 pour phpserver depuis TravailDM

$CntrlMarketPlace = new CntrlMarketPlace();
if (session_status() != PHP_SESSION_ACTIVE) session_start();


/* url
                                GET   page accueil
    /                    	    GET   page accueil
    /rubriques                  GET   affichage de la liste des rubriques
    /rubriques/ajout            GET   affichage formulaire ajout rubrique
    /rubriques/ajout            POST  ajout d'une rubrique
    /rubriques/one              GET   voir une rubrique
    /rubriques/suppression      POST  suppression d'une rubrique
    /favoris                    GET   affichage de la liste des favoris
    /favoris/ajout              GET   affichage formulaire ajout favori
    /favoris/ajout              POST  ajout du favori
    /favoris/one                GET   voir un favori
    /favoris/suppression        POST  suppression d'un favori
    /users                      GET   affichage de la liste des users

*/

$uri = $_SERVER['REQUEST_URI'];
// on garde la partie avant le ? ex /rubrique?id=1
$route = explode('?',$uri)[0];
$method = strtolower($_SERVER['REQUEST_METHOD']);
// echo $route . ' - ' . $method;

// Pour le test du rewriting dans .htaccess avec /rubrique/add/2  (rubrique/action/id)
// http://localhost/travailDM/6-phpMVC/demofavoris/src1/rubrique/add/27
// $action = $_GET['action'];
// $id = $_GET['id'];
// echo $action . ' - ' . $id;


if ($method=='get') {
    match($route){
        APP_ROOT                            => $CntrlMarketPlace->getIndex(),
        APP_ROOT .'/'                       => $CntrlMarketPlace->getIndex(),
        APP_ROOT .'/users'                  => $CntrlMarketPlace->getUsers(),
        // APP_ROOT .'/users/ajout'            => $CntrlMarketPlace->addUser(),
        APP_ROOT .'/users/json'             => $CntrlMarketPlace->getFavorisJson(),
        APP_ROOT .'/session'                => $CntrlMarketPlace->session(),
        // APP_ROOT .'/session/User'           => $CntrlMarketPlace->removeSessionUser(),
        APP_ROOT .'/cookie'                 => $CntrlMarketPlace->cookie(),
        default                             => $CntrlMarketPlace->getIndex(),
    };
} elseif ($method=='post') {
    match($route){
        // APP_ROOT .'/users/edit'             => $CntrlMarketPlace->updateUser(),
        // // APP_ROOT .'/users/ajout'            => $CntrlMarketPlace->addUser(),
        // APP_ROOT .'/users/suppression'      => $CntrlMarketPlace->delUser(),
        APP_ROOT .'/users'                  => $CntrlMarketPlace->getUsers(),
        default                             => $CntrlMarketPlace->getIndex(),
    };
} else {
    $CntrlMarketPlace->getIndex();
}
	// surtout pas de code ici !!!