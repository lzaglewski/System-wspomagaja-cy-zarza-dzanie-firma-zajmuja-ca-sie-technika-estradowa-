<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 08.06.2016
 * Time: 06:11
 */

class Zlecenie {

    private $_Data;
    private $_miejsce;
    private $_klient;
    private $_cena;
    private $_faktura;
    private $_sprzęt=array();


    function __construct($_sprzęt, $_faktura, $_cena, $_klient, $_miejsce, $_Data)
    {
        $this->_sprzęt = $_sprzęt;
        $this->_faktura = $_faktura;
        $this->_cena = $_cena;
        $this->_klient = $_klient;
        $this->_miejsce = $_miejsce;
        $this->_Data = $_Data;
    }


    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->_Data;
    }

    /**
     * @return mixed
     */
    public function getMiejsce()
    {
        return $this->_miejsce;
    }

    /**
     * @return mixed
     */
    public function getKlient()
    {
        return $this->_klient;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->_cena;
    }

    /**
     * @return mixed
     */
    public function getFaktura()
    {
        return $this->_faktura;
    }

    /**
     * @return array
     */
    public function getSprzęt()
    {
        return $this->_sprzęt;
    }





}