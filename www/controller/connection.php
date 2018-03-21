<?php


require ROOT . '/model/connexion.php';


class Connection extends Controller
{


    public function connect()
    {


        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $passwd = filter_input(INPUT_POST, 'password');
        echo $email, $passwd;

        if (checkConnexionValid($email,$passwd))
            require ROOT . '/views/dashboard.html';
        else {
            header('location:/');


        }
    }

};