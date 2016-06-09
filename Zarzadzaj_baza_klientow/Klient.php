<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 17:03
 */

class Klient {
    private $_imie;
    private $_nazwisko;
    private $_pesel;

    /**
     * @param mixed $pesel
     */
    public function setPesel($pesel)
    {
        $this->_pesel = $pesel;
    }

    /**
     * @param mixed $nazwisko
     */
    public function setNazwisko($nazwisko)
    {
        $this->_nazwisko = $nazwisko;
    }

    /**
     * @param mixed $imie
     */
    public function setImie($imie)
    {
        $this->_imie = $imie;
    }





    public function getImie(){return $this->_imie;}
    public function getNazwisko(){ return $this->_nazwisko;}
    public function getPesel(){return $this->_pesel;}


}