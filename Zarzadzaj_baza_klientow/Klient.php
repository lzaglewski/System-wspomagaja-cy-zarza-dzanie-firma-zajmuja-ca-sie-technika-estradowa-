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

    public function __construct($name,$surname,$pes){

        $this->_imie=$name;
        $this->_nazwisko=$surname;
        $this->_pesel=$pes;
    }



    public function getImie(){return $this->_imie;}
    public function getNazwisko(){ return $this->_nazwisko;}
    public function getPesel(){return $this->_pesel;}


}