<?php


//define("WEBROOT");
define("ROOT",__DIR__);
echo ROOT;
echo '<pre>';             //Pour debug
print_r($_SERVER);
echo '</pre>';


require 'core/controller.php';
$params = explode('/',$_SERVER['REDIRECT_URL']);

if (isset($params[1])&& isset($params[2])) {

$controller = $params[1];
$action = $params[2];
echo 'controller : ' . $controller . '</br>';
echo 'action : ' . $action;
if (file_exists('controller/' . $controller . '.php')) {
require 'controller/' . $controller . '.php';
if (class_exists($controller)) {
$controllerObject = new $controller();
if (method_exists($controllerObject, $action))
$controllerObject->$action();
}

}
else {                                      //page d'Erreur
//require 'controller/pagenotfound.php';
//$controllerObject = new Pagenotfound();
//$controllerObject->displayError();
//$controllerObject->end_page();
}
}

else {
require 'controller/home.php';
$controllerObject = new Home();
$controllerObject->index();
}
