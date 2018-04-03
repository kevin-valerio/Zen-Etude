<?php

class Alerte
{

    public const DANGER = 'DANGER';
    public const WARNING = 'WARNING';
    public const INFO = 'INFO';
    public const SUCCESS = 'SUCCESS';


    static function printAlert($type, $content)
    {
        foreach (Controller::getMainUser()->getStudentsMails() as $array) {
            echo '<td data-title="ID de l\'étudiant">' . $array[0] . '</td>';
            echo '<td  data-title="Mail">' . $array[1] . '</td>';

            echo '<td data-title="Compte créé">' . $array[2] . '</td>';
            echo '<td data-title=Inviter"><input type="button" value="Inviter"></td><tr>';

        }

    }
}

?>
       