<?php

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 08.06.2016
 * Time: 01:22
 */

class FormularzMagazyn  {

    private $_data;

    /**
     * @return mixed
     */

    private $_rodzaj;
    private $_model;


    private $_marka;
    private $_status;
    private $_ilosc;




    public function __construct(){

    }



    private function dodajZlecenie(){



    }



    private function checkBase(){



    }





    private function validate(){



    }


    private function zapis($id){




    }


    public function edycja($id,$imie,$nazwisko,$pesel){



    }

    public function dodawanie(){



    }


    public function usuwanie($id){



    }


    /**
     * @return mixed
     */
    public function getIlosc()
    {
        return $this->_ilosc;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @return mixed
     */
    public function getMarka()
    {
        return $this->_marka;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @return mixed
     */
    public function getRodzaj()
    {
        return $this->_rodzaj;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }




}