<?php
require_once 'models/User.php';
require_once 'utils/util.php';
require_once 'views/core.php';
require_once 'controllers/Controler.php';


class PasswordForgetController extends Controller
{

    public function __construct()
    {
        parent::checkIfValidURL();
    }

    public function show()
    {
        showAllWithView("views/recuperation.php");
    }

    public function sendNewPasswordMail()
    {

        $mail = filter_input(INPUT_POST, 'mail');
        $account = User::getUserByMail($mail);

        if (!is_null($account->getMail())) {

            $newPassword = randomPassword();
            $account->setPassword($newPassword);
            $from = "webmaster@zenetude.alwaysdata.net";
            $subject = "Réinitialisation de votre mot de passe";
            $message = "
                <h1>Votre mot de passe est arrivé ! </h1>
                <p>Voici votre nouveau mot de passe ZenEtude</p>
                <br>
                <b>" . $newPassword . "</b>
                <br><i>Merci !</i>";
            $headers = "From:" . $from;
            mail($mail, $subject, $message, $headers);
            //WARNING : Les mails ne s'envoient pas...
            redirect("/?controller=passwordForget&action=show&info=1&p=" . $newPassword);

        }

        else{

            redirect("/?controller=passwordForget&action=show&info=0");
        }


    }


}