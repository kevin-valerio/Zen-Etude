<?php
require_once $_SERVER['DOCUMENT_ROOT'].'utils/database.php';
require_once 'Note.php';
require_once 'Absence.php';

class User
{

    private $etu_id;
    private $mailAdress;
    private $pass;
    private $codepostal;
    private $villedomicile;
    private $paysdomicile;
    private $telephone;
    private $telephonemobile;
    private $isadmin;


    public function __construct($etu_id, $mailAdress, $pass, $codepostal, $villedomicile, $paysdomicile,$telephone, $telephonemobile, $isadmin)
    {
        $this->etu_id = $etu_id;
        $this->mailAdress = $mailAdress;
        $this->pass = $pass;
        $this->codepostal = $codepostal;
        $this->villedomicile = $villedomicile;
        $this->telephone = $telephone;
        $this->telephonemobile = $telephonemobile;
        $this->paysdomicile = $paysdomicile;
        $this->isadmin = $isadmin;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @return mixed
     */
    public function getVilledomicile()
    {
        return $this->villedomicile;
    }

    /**
     * @return mixed
     */
    public function getPaysdomicile()
    {
        return $this->paysdomicile;
    }
    public function getPassword(){
        return $this->pass;
    }
    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getTelephonemobile()
    {
        return $this->telephonemobile;
    }

    public function getIsAdmin()
    {
        return $this->isadmin;
    }


    /*
     * Permet de changer le pseudo
     */
    public function setPseudo($pseudo)
    {

        $this->username = $pseudo;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET pseudo = :pseudo  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function setPaysDomicile($paysdomicile)
    {

        $this->paysdomicile = $paysdomicile;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET paysdomicile = :pseudo  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':paysdomicile', $paysdomicile, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function setCodepostal($codepostal)
    {

        $this->codepostal = $codepostal;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET codepostal = :codepostal  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':codepostal', $codepostal, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function setVilledomicile($villedomicile)
    {

        $this->villedomicile = $villedomicile;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET villedomicile = :villedomicile  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':villedomicile', $villedomicile, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function setTelephoneMobile($telephonemobile)
    {

        $this->telephonemobile = $telephonemobile;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET telephonemobile = :telephonemobile  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':telephonemobile', $telephonemobile, PDO::PARAM_STR);
        $stmt->execute();

    }
    public function setTelephone($telephone)
    {

        $this->telephone = $telephone;
        $pdo = Database::getConnection();

        $sql = "UPDATE users SET telephone = :telephone  WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $stmt->execute();

    }



    /*
     * Permet de changer le mot de passe
     */
    public function setPassword($password)
    {

        $this->password = $password;
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare("UPDATE users SET pass = :pass WHERE mail = :mail");
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function setMailAdress($mailAdress)
    {

        $this->mailAdress = $mailAdress;
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare("UPDATE users SET mail = :mail WHERE etu_id = :id");
        $stmt->bindParam(':mail', $this->mailAdress, PDO::PARAM_STR);
        $stmt->bindParam(':id', $this->etu_id, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function getMail()
    {
        return $this->mailAdress;
    }

    /*
     * Déconnecte l'utilisateur
     */
    public function disconnect()
    {
        $_SESSION = array();

        if (ini_get("sessions.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    /*
     * Crée la sessipon associée au compte
     */
    public function createSession()
    {
        session_start();
        $_SESSION['account'] = $this;
    }

    /*
     * Ajout un compte dans la base de donnée avec les bons parametres
     */

    /**
     * @deprecated A revoir
     */
    public static function addAccount()
    {


        $pseudo = filter_input(INPUT_POST, 'pseudo');
        $mailAdress = filter_input(INPUT_POST, 'mail');
        $pass = filter_input(INPUT_POST, 'pass');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $language = filter_input(INPUT_POST, 'langue');
        /* PLUS POSSIBLE
        $grade              = filter_input(INPUT_POST, 'grade'); */
        $registerKey = uniqid();

        if ($confirmPassword != $pass) {
            redirect('/?controller=user&action=register&match=1');
            exit;
        } else {
            $pdo = Database::getConnection();
            $stmt = $pdo->prepare("INSERT INTO users (pseudo, mail, pass, langue/*, grade*/, register_key) VALUES 
                (:myPseudo,  :myMail,  :myPass, :myLanguage, :myRegisterKey)");
            $stmt->execute(array(
                "myPseudo" => $pseudo,
                "myMail" => $mailAdress,
                "myPass" => $pass,
                "myLanguage" => $language,
                "myRegisterKey" => $registerKey
            ));

            if ($stmt) {
                self::sendRegisterMail($mailAdress, $registerKey);
                redirect("/?info=2");
            }
        }
    }


    /*
     * Return l'objet User associé au $mailAdresse et $password associé
     */
    public static function getUser($mailAdresse, $password)
    {

        try {

            $pdo = Database::getConnection();

            $query = $pdo->prepare("SELECT DISTINCT *
                                                FROM users
                                                WHERE mail = :mail AND pass = :pass");

            $query->execute(array(
                "mail" => $mailAdresse,
                "pass" => $password
            ));

            $fetchedUser = $query->fetch();
        } catch (PDOException $e) {
            return NULL;
        }

        $str = "false";
        if ($fetchedUser["isadmin"])
            $str = "true";
        return new User($fetchedUser["etu_id"],
            $fetchedUser["mail"],
            $fetchedUser["pass"],
            $fetchedUser["codepostal"],
            $fetchedUser["villedomicile"],
            $fetchedUser["paysdomicile"],
            $fetchedUser["telephone"],
            $fetchedUser["telephonemobile"],
            $str);
    }

    public function getAbsences()  {

        try {

            $pdo = Database::getConnection("zenetude_base");

            $query = $pdo->prepare("SELECT *
                                                FROM absences
                                                WHERE etudid = :id_etu");

            $query->execute(array(
                "id_etu" => $this->etu_id,
            ));

            $fetchedNote = $query->fetchAll();
            $absence = array();

            foreach ($fetchedNote as $row) {
                array_push($absence, new Absence(
                    $row["etudid"],
                    $row["jour"],
                    $row["matin"])); // matin=true -> 1 demijournee sinon 2
            }
        } catch (PDOException $e) {
            return NULL;
        }

        return $absence;
    }



    /* faire des jointures pour récup ce que l'on veut */
    public function getNotes()  {

        try {

            $pdo = Database::getConnection("zenetude_base");

            $query = $pdo->prepare("SELECT n.etudid, n.evaluation_id, n.value, e.coefficient, m.titre
                                                FROM notes_notes n, notes_evaluation e, notes_moduleimpl mod, notes_modules m 
                                                WHERE etudid = :id_etu and n.evaluation_id = e.evaluation_id
                                                and e.moduleimpl_id = mod.moduleimpl_id and mod.module_id = m.module_id
                                                
                                                ");

            $query->execute(array(
                "id_etu" => $this->etu_id,
            ));

            $fetchedNote = $query->fetchAll();
            $notes = array();

            foreach ($fetchedNote as $row) {
                array_push($notes, new Note($row["evaluation_id"],
                    $row["etudid"],
                    $row["value"],
                    $row["coefficient"],
                    $row["titre"]));
            }
        } catch (PDOException $e) {
            return NULL;
        }

        return $notes;
    }



    /*
     * Retourne l'utilisateur (l'objet) associé à l'adresse mail
     */
    public static function getUserByMail($mail)
    {

        try {

            $pdo = Database::getConnection();

            $query = $pdo->prepare("SELECT * FROM users WHERE mail=:mail");

            $query->execute(array(
                "mail" => $mail
            ));

            $fetchedUser = $query->fetch();
        } catch (PDOException $e) {

             return null;
        }
        $str = "false";
        if ($fetchedUser["isadmin"])
            $str = "true";
        return new User($fetchedUser["etu_id"],
            $fetchedUser["mail"],
            $fetchedUser["pass"],
            $fetchedUser["codepostal"],
            $fetchedUser["villedomicile"],
            $fetchedUser["paysdomicile"],
            $fetchedUser["telephone"],
            $fetchedUser["telephonemobile"],
            $str);
    }


}

?>