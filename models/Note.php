<?php
/**
 * Created by PhpStorm.
 * User: v16007689
 * Date: 26/03/18
 * Time: 10:58
 */

class Note
{

    private $id_note;
    private $id_etu;
    private $note;
    private $coeff;
    private $matiere;

    /**
     * Note constructor.
     * @param $id_note
     * @param $id_etu
     * @param $note
     * @param $coeff
     * @param $matiere
     */
    public function __construct($id_note, $id_etu, $note, $coeff, $matiere)
    {
        $this->id_note = $id_note;
        $this->id_etu = $id_etu;
        $this->note = $note;
        $this->coeff = $coeff;
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getIdNote()
    {
        return $this->id_note;
    }

    /**
     * @param mixed $id_note
     * @return Note
     */
    public function setIdNote($id_note)
    {
        $this->id_note = $id_note;
        return $this;
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
     * @return Note
     */
    public function setIdEtu($id_etu)
    {
        $this->id_etu = $id_etu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * @param mixed $coeff
     * @return Note
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;
        return $this;
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
     * @return Note
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
        return $this;
    }




}