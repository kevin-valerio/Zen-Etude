<?php


require ROOT . '/model/connexion.php';


class Connection extends Controller
{


    public function connect()
    {


      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $passwd = filter_input(INPUT_POST, 'password');


        $a = checkConnexionValid($email,$passwd);

        if ($a) {


            require ROOT . '/views/dashboard.html';

        }
        else {
            $this->error();

        }
    }

    public function error(){
        require ROOT . '/views/error404.html';
    }

};