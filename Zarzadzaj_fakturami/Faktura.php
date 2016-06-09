<?php


class Faktura {

    private $_numer;
    private $_data;
    private $_sprzedawca;
    private $_nabywca;
    private $_towar;
    private $_towar_cena;


    public function __construct($numer,$data,$sprzedawca,$nabywca,$towar,$cena){
        $this->_data=$data;
        $this->_nabywca=$nabywca;
        $this->_numer=$numer;
        $this->_sprzedawca=$sprzedawca;
        $this->_towar_cena=$cena;
        $this->_towar=$towar;


    }


    public function getNumer()
    {
        return $this->_numer;
    }


    public function getSprzedawca()
    {
        return $this->_sprzedawca;
    }


    public function getData()
    {
        return $this->_data;
    }


    public function getNabywca()
    {
        return $this->_nabywca;
    }


    public function getTowar()
    {
        return $this->_towar;
    }



    public function getTowarCena()
    {
        return $this->_towar_cena;
    }




}



