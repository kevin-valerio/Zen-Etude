<?php

class Alerte
{

    public const DANGER = 'DANGER';
    public const WARNING = 'WARNING';
    public const INFO = 'INFO';
    public const SUCCESS = 'SUCCESS';


    static function printAlert($type, $content)
    {
        if ($type == self::DANGER) {
            echo '<div class="alert alert-danger"><strong> ' . ucfirst($type) . '</strong> ' . $content . '</div>';
        } elseif ($type == self::WARNING) {
            echo '<div class="alert alert-warning"><strong> ' . ucfirst($type) . '</strong> ' . $content . '</div>';
        } elseif ($type == self::INFO) {
            echo '<div class="alert alert-info"><strong> ' . ucfirst($type) . ' : </strong> ' . $content . '</div>';
        } elseif ($type == self::SUCCESS) {
            echo '<div class="alert alert-success"><strong> ' . ucfirst($type) . '</strong> ' . $content . '</div>';
        }

     }
}

?>
       