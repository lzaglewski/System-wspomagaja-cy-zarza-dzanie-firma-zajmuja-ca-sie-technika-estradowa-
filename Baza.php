<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 20:08
 */




class Baza
{
    public $query;
    private $result;
    private $records_rows;
    private $records;
    private $dbHost;
    private $dbUser;
    private $dbHaslo;
    private $dbName;
    private $connection;


    function Baza()
    {

        $this -> query = '';
        $this -> result = '';
        $this -> dbHost = 'localhost'; // nazwa hosta
        $this -> dbUser = 'root'; // login do bazy
        $this -> dbHaslo = 'root'; // hasło do bazy
        $this -> dbName = 'naglosnienie'; // nazwa bazy danych
        $this -> connection = FALSE;
    }




    function sqlConnect()
    {


        $this -> connection = new mysqli($this->dbHost, $this->dbUser, $this->dbHaslo, $this->dbName);



        if ($this->connection->connect_error) {

            die('Connect Error ('.$this->connection->connect_errno.') '.$this->connection->connect_error);

            if (mysqli_connect_error()) {
                die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
            }
        }

    }



    function sqlQuery($query)
    {

        $this->query = $query;

        // $this -> result=$this->connection->query($this->query);
        if ($this->result=mysqli_query($this->connection, $this->query)) {

           return $this->result;

        } else {
            echo "Error: " . $this->query . "<br>" . mysqli_error($this->connection);
        }
    }



};