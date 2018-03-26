<?php
require_once 'models/User.php';
require_once 'utils/util.php';
require_once 'views/core.php';
require_once 'controllers/Controler.php';


class UserController extends Controller
{


    public function __construct()
    {
        parent::checkIfValidURL();
    }

    /*
     * Tente une connexion
     */
    public function connectionTry()
    {
        $username = filter_input(INPUT_POST, 'mail');
        $password = filter_input(INPUT_POST, 'pass');
        $newUser = User::getUser($username, $password);

        if (is_null($newUser->getMail())) {

            /*Wrong ids */
            redirect("/?info=0");

        } elseif (!is_null($newUser)) {

            /*Connected*/
            $newUser->createSession();
            redirect("/?controller=dashboard&action=show");
        }

    }

    /*
     * Change le mot de passe de l'utilisateur
     */
    public function changePassword()
    {

        $mail = filter_input(INPUT_POST, 'email');
        $randomPass = randomPassword();

        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("UPDATE users SET pass= :pass  WHERE mail= :mail");
        $stmt->execute(array(
            "mail" => $mail,
            "pass" => $randomPass
        ));

        if ($stmt) {
            $subject = "Réinitialisation du mot de passe";
            $message = "<html><head></head><body>Voici le nouveau mot de passe : " . $randomPass . "</body></html>";
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            mail($mail, $subject, $message, $headers);

            IndexController::index();
        }
    }

    /*
     * Déconnecter l'utilisateur de la base
     */
    public function disconnect()
    {
        $user = Controller::getMainUser();
        $user->disconnect();
        redirect('index.php');
    }

    /*
     * Editer les informations relatives à l'utilisateur
     */
    public function editAccount()
    {

        $pseudo = filter_input(INPUT_POST, 'pseudo');
        $password = filter_input(INPUT_POST, 'password');
        $lang = filter_input(INPUT_POST, 'lang');
        $grade = filter_input(INPUT_POST, 'grade');

        $_SESSION["user-edit"]->setPseudo($pseudo);
        $_SESSION["user-edit"]->setPrefLanguage($lang);
        $_SESSION["user-edit"]->setGrade($grade);
        if ($password != "") {
            $_SESSION["user-edit"]->setPassword($password);
        }

        redirect("?controller=user&action=edit&info=1");
    }

    /*
     * Ajouter un commpte
     */
    public function addAccount()
    {
        User::addAccount();
    }

    public function edit()
    {
        $_SESSION['user-edit'] = self::getMainUser();
        $_SESSION['user-action'] = 'controller=user&action=editAccount';
        showAllWithView('views/user/edit.php');
    }

    /*
     * Affiche la vue de connexion
     */
    public function login()
    {
        showAllWithView('views/dashboard.html');
    }

    /*
     * Affiche la vue d'oublie de mot de passe
     */
    public function forgot()
    {
        showAllWithView('views/user/forgot.php');
    }

    /*
     * Affiche la vue d'inscription
     */
    public function register()
    {
        showAllWithView('views/user/register.php');
    }
}