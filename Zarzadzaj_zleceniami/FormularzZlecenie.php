<?php

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 08.06.2016
 * Time: 01:22
 */

class FormularzZlecenie  {

    private $_data;

    /**
     * @return mixed
     */

    private $_miejsce;
    private $_klient;
    private $_cena;
    private $_faktura;
    private $_sprzet;




    public function __construct(){

        $this->_sprzet=new Sprzet(null,null,null,null,null);

    }



    private function dodajZlecenie(){



    }



    private function checkBase(){

        $this->_baza=new Baza();
        $sql='SELECT * FROM klienci WHERE pesel=\''.$this->_pesel.'\'';

        $this->_baza->sqlConnect();

        $result=$this->_baza->sqlQuery($sql);


        if (mysqli_num_rows($result) > 0) {
            echo'Klient juz istnieje';
        }
        else {$this->dodajZlecenie();

        }

    }





    private function validate(){

        if($_POST['imie'] && $_POST['nazwisko'] && $_POST['pesel']){
            $this->_imie=$_POST['imie'];
            $this->_nazwisko=$_POST['nazwisko'];
            $this->_pesel=$_POST['pesel'];

            $this->checkBase();

        }else{
            echo 'Uzupełnij formularz';
        }


    }


    private function zapis($id){


        if($_POST['imie'] && $_POST['nazwisko'] && $_POST['pesel']){
            $this->_imie=$_POST['imie'];
            $this->_nazwisko=$_POST['nazwisko'];
            $this->_pesel=$_POST['pesel'];



        }else{
            echo 'Uzupełnij formularz';
        }

        $this->_baza=new Baza();
        $sql='UPDATE klienci SET imie=\''.$this->_imie.'\',
    nazwisko=\''.$this->_nazwisko.'\' WHERE id='.$id.'';

        $this->_baza->sqlConnect();

        $result=$this->_baza->sqlQuery($sql);

    }


    public function edycja($id,$imie,$nazwisko,$pesel){



    }

    public function dodawanie(){



    }


    public function usuwanie($id){



    }

    public function getSprzet()
    {
        return $this->_sprzet;
    }

    /**
     * @return mixed
     */
    public function getFaktura()
    {
        return $this->_faktura;
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
    public function getKlient()
    {
        return $this->_klient;
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
    public function getData()
    {
        return $this->_data;
    }




}