<?php


include_once"Zarzadzaj_baza_klientow.php";

$zbk=new Zarzadzaj_baza_klientow();


?>

<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>imie</th>
        <th>nazwisko</th>
      </tr>
    </thead>
    <tbody>
   <?php

    $zbk->PobierzListe();

    ?>

    </tbody>
  </table>