<?php

require 'controllers/UserController.php';
require 'controllers/PasswordForgetController.php';
require 'controllers/DashboardController.php';
require 'controllers/IndexController.php';
require 'controllers/ManageAccountController.php';

class Application {
       

    function start(){

        $controllerLink = filter_input(INPUT_GET, 'controller');
        $functionLink   = filter_input(INPUT_GET, 'action');
        
         if (file_exists('controllers/' . ucfirst($controllerLink) . 'Controller.php')) {
            $mainController =  ucfirst($controllerLink) . 'Controller';
            $mainController = new $mainController();

            if (method_exists($mainController, $functionLink)) {
                $mainController->$functionLink();
            }
            else {

                IndexController::index();
            }
        }
        elseif ($_SERVER["REQUEST_URI"] == "/" ||
            $_SERVER["REQUEST_URI"] == "/index.php" ||
            $_SERVER["REQUEST_URI"] == "/accueil.php"){
            IndexController::index();
        }
        else {
            IndexController::error();
        }
    }
}