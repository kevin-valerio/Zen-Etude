<?php
/**
 * Created by PhpStorm.
 * User: v16007689
 * Date: 26/03/18
 * Time: 11:14
 */

class Absence
{

    private $id_etu;
    private $date;
    private $demijournee;

    /**
     * Absence constructor.
     * @param $id_etu
     * @param $date
     * @param $demijournee
     */
    public function __construct($id_etu, $date, $demijournee)
    {
        $this->id_etu = $id_etu;
        $this->date = $date;
        $this->demijournee = $demijournee;
    }

//    /**
//     * @return mixed
//     */
//    public function getIdAbs()
//    {
//        return $this->id_abs;
//    }
//
//    /**
//     * @param mixed $id_abs
//     */
//    public function setIdAbs($id_abs)
//    {
//        $this->id_abs = $id_abs;
//    }

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
    public function getDemijournee()
    {
        return $this->demijournee;
    }

    /**
     * @param mixed $demijournee
     */
    public function setDemijournee($demijournee)
    {
        $this->demijournee = $demijournee;
    }




}