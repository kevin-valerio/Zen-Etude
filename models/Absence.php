<?php
/**
 * Created by PhpStorm.
 * User: v16007689
 * Date: 26/03/18
 * Time: 11:14
 */

class Absence
{

    private $id_abs;
    private $id_etu;
    private $date;
    private $matiere;

    /**
     * Absence constructor.
     * @param $id_abs
     * @param $id_etu
     * @param $date
     * @param $matiere
     */
    public function __construct($id_abs, $id_etu, $date, $matiere)
    {
        $this->id_abs = $id_abs;
        $this->id_etu = $id_etu;
        $this->date = $date;
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getIdAbs()
    {
        return $this->id_abs;
    }

    /**
     * @param mixed $id_abs
     */
    public function setIdAbs($id_abs)
    {
        $this->id_abs = $id_abs;
    }

    /**
     * @return mixed
     */
    public function getIdEtu()
    {
        return $this->id_etu;
    }

    /**
     * @param mixed $id_etu
     */
    public function setIdEtu($id_etu)
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }




}