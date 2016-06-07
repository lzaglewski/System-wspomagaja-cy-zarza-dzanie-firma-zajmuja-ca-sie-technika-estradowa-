<?php

include_once"Baza.php";

$b=new Baza();
$b->sqlConnect();
$result = $b->sqlQuery('SELECT * FROM klienci');


if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. ", Name: " . $row["imie"]. ", Nazwisko: " . $row["nazwisko"]. "<br>";
    }
} else {
    echo "0 results";
}
