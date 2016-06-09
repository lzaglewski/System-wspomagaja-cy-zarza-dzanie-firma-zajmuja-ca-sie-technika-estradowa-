<?php

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 18:08
 */
include"Baza.php";

class Zarzadzaj_fakturami{


    private $baza;
    private $result;
    private $sql;


    public function __constuct(){

    }




    public function PobierzListe(){

        $this->sql="SELECT * FROM faktury";



        $this->baza=new Baza();
        $this->baza->sqlConnect();

        $this->result=$this->baza->sqlQuery($this->sql);


        if (mysqli_num_rows($this->result) > 0) {

            while($row = mysqli_fetch_assoc($this->result)) {
                echo '<tr><td>'. $row["ID"].'</td><td>' . $row["data"]. '</td><td>' . $row["nabywca"]. '</td><td><a href="/index.php?var=faktura&szczegoly=true&id='.$row["ID"].'">szczegoly</a></td></tr>';
            }
        } else {
            echo "0 results";
        }



    }



    public function Szczegolowo($id){

        $this->sql="SELECT * FROM faktury WHERE ID='$id'";

        // echo $this->sql;



        $this->baza=new Baza();
        $this->baza->sqlConnect();

        $this->result=$this->baza->sqlQuery($this->sql);


        if (mysqli_num_rows($this->result) > 0) {

            while($row = mysqli_fetch_assoc($this->result)) {
                echo '<tr><td>'. $row["ID"].'</td><td>' . $row["data"]. '</td><td>' . $row["sprzedawca"]. '</td><td>' . $row["nabywca"]. '</td><td>' . $row["towar"]. '</td><td>' . $row["towar_cena"]. '</td><td><a href="/index.php?var=faktura&szczegoly=true&id='.$row["ID"].'">Drukuj</a></td></tr>';
            }
        } else {
            echo "0 results";
        }

    }


}