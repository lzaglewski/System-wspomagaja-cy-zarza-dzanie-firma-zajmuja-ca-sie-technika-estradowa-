<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 08.06.2016
 * Time: 01:22
 */

class FormularzKlient  {

    private $_imie;
    private $_nazwisko;
    private $_pesel;
    private $_baza;



    public function __construct(){

    }



    private function dodajKlienta(){

        $sql='INSERT INTO klienci(ID, imie, nazwisko, pesel) VALUES (NULL,\''.$this->_imie.'\',\''.$this->_nazwisko.'\',\''.$this->_pesel.'\')';


        if ($this->_baza->sqlQuery($sql) === TRUE) {
            echo "Pomyślnie dodano";
        } else {
            echo "Error: " . $sql . "<br>" .$this->_baza->error;
        }

    }



    private function checkBase(){

        $this->_baza=new Baza();
        $sql='SELECT * FROM klienci WHERE pesel=\''.$this->_pesel.'\'';

        $this->_baza->sqlConnect();

        $result=$this->_baza->sqlQuery($sql);


        if (mysqli_num_rows($result) > 0) {
            echo'Klient juz istnieje';
        }
        else {$this->dodajKlienta();}

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
    

    public function edycja(){

    }

    public function dodawanie(){

        echo '<form action="" method="post">
                Imię: <input type="text" name="imie"><br>
                Nazwisko: <input type="text" name="nazwisko"><br>
                 Pesel: <input type="text" name="pesel"><br>
                <input type="submit" name="Dodaj">
                </form>';


      if(isset($_POST['Dodaj'])) $this->validate();

    }



    public function getImie()
    {
        return $this->_imie;
    }


    public function getNazwisko()
    {
        return $this->_nazwisko;
    }


    public function getPesel()
    {
        return $this->_pesel;
    }

}