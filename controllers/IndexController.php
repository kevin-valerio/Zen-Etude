<?php

class IndexController
{

    function __construct()
    {
        parent::checkIfValidURL();
    }

    public static function index($alternativeWay = false)
    {
        if ($alternativeWay) {
            redirect('index.php');
        }
        else {
             showAllWithView('views/accueil.php');
        }
    }

    public static function error() {

            showAllWithView('views/404.php');

    }
}

?>