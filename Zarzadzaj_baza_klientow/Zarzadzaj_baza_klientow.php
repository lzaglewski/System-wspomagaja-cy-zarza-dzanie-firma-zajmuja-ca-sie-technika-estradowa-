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


    public  function Formularz($akcja,$id)
    {
        include_once 'FormularzKlient.php';

        $form = new FormularzKlient();

        if($akcja=='dodawanie'){$form->dodawanie();}

        if($akcja=='edycja'){$form->edycja($id,$_GET['imie'],$_GET['nazwisko'],$_GET[pesel]);}
        if($akcja=='usun'){$form->usuwanie($id);}


    }


    public function PobierzListe(){

        $this->sql="SELECT * FROM klienci";



        $this->baza=new Baza();
        $this->baza->sqlConnect();

        $this->result=$this->baza->sqlQuery($this->sql);


        if (mysqli_num_rows($this->result) > 0) {

            while($row = mysqli_fetch_assoc($this->result)) {
                echo '<tr><td>'. $row["ID"].'</td><td>' . $row["imie"]. '</td><td>' . $row["nazwisko"]. '</td><td></td><td></td><td></td><td><a href="/index.php?var=klient&szczegoly=true&id='.$row["ID"].'">szczegoly</a></td></tr>';
            }
        } else {
            echo "0 results";
        }

    }



    public function Szczegolowo($id){

        $this->sql="SELECT * FROM klienci WHERE ID='$id'";

       // echo $this->sql;



        $this->baza=new Baza();
        $this->baza->sqlConnect();

        $this->result=$this->baza->sqlQuery($this->sql);


        if (mysqli_num_rows($this->result) > 0) {

            while($row = mysqli_fetch_assoc($this->result)) {
                echo '<tr><td>'. $row["ID"].'</td><td>' . $row["imie"]. '</td><td>'
                    . $row["nazwisko"]. '</td><td>'.$row["pesel"].'</td>
                    <td><a href="/index.php?var=klient&szczegoly=true&edycja=true&id='.$row["ID"].'&imie='.$row["imie"].'&nazwisko='.$row["nazwisko"].'&pesel='.$row["pesel"].'">edycja</a></td>
                    <td><a href="/index.php?var=klient&szczegoly=true&usun=true&id='.$row["ID"].'">usun</a></td></tr>';
            }
        } else {
            echo "0 results";
        }

    }


}