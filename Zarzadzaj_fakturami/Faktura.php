<?php


class Faktura {

    protected $_numer;
    protected $_data;
    protected $_sprzedawca;
    protected $_nabywca;
    protected $_towar;
    protected $_towar_cena;


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



