<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "controllers/Controler.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "models/User.php";
session_start();
$resultat = new stdClass();
$resultat->bool = false;
$pass = Controller::getMainUser()->getPassword();
if ($pass == $_GET['mdp']){
    $resultat->bool = true;
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($resultat);