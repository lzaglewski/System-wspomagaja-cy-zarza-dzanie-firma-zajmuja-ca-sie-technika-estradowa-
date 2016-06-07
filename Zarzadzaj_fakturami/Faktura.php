<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 19:30
 */

class Faktura {

    protected $_numer;
    protected $_data;
    protected $_sprzedawca;
    protected $_nabywca;
    protected $_towar_marka;
    protected $_towar_model;
    protected $_towar_cena;

    public function __construct($numer,$data,$sprzedawca,$nabywca,$marka,$model,$cena){
        $this->_data=$data;
        $this->_nabywca=$nabywca;
        $this->_numer=$numer;
        $this->_sprzedawca=$sprzedawca;
        $this->_towar_cena=$cena;
        $this->_towar_marka=$marka;
        $this->_towar_model=$model;

    }




}



