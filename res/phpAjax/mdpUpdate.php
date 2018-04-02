<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'models/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "controllers/Controler.php";
session_start();

$user = Controller::getMainUser();
$user->setPassword($_POST['pass']);
$user->disconnect();