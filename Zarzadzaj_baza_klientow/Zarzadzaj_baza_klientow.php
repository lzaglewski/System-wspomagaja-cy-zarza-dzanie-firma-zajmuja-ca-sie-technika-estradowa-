<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 18:08
 */
include"Baza.php";

class Zarzadzaj_baza_klientow{


    private $baza;
    private $result;
    private $sql;


    public function __constuct(){

    }


    public  function Formularz($akcja)
    {
        include_once 'FormularzKlient.php';

        $form = new FormularzKlient();

        if($akcja=='dodawanie'){$form->dodawanie();}

        if($akcja=='educja'){$form->edycja();}


    }


    public function PobierzListe(){

        $this->sql="SELECT * FROM klienci";



        $this->baza=new Baza();
        $this->baza->sqlConnect();

        $this->result=$this->baza->sqlQuery($this->sql);


        if (mysqli_num_rows($this->result) > 0) {

            while($row = mysqli_fetch_assoc($this->result)) {
                echo "<tr><td>". $row["ID"]."</td><td>" . $row["imie"]. "</td><td>" . $row["nazwisko"]. "</td><td>" . $row["pesel"]. "</td></tr>";
            }
        } else {
            echo "0 results";
        }



    }


}