<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 17:50
 */

class Sprzet {

    private $_rodzaj;
    private $_marka;
    private $_model;
    private $_status;
    private $_ilosc;


    public function __construct($rodzaj,$marka,$model,$status,$ilosc){
        $this->_rodzaj=$rodzaj;
        $this->_marka=$marka;
        $this->_model=$model;
        $this->_status=$status;
        $this->_ilosc=$status;
    }


    public function getRodzaj(){return $this->_rodzaj;}
    public function getMarka(){return $this->_marka;}
    public function getModel(){return $this->_model;}
    public function getStatus(){return $this->_status;}
    public function getIlosc(){return $this->_ilosc;}

}