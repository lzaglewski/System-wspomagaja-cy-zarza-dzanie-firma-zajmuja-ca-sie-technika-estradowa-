<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 07.06.2016
 * Time: 19:46
 */




include_once"Zarzadzaj_fakturami.php";

$zf=new Zarzadzaj_fakturami();


?>



    <table class="table table-striped">
        <thead>
        <tr>
            <th>numer</th>
            <th>data</th>
            <th>Nazwisko</th>
        </tr>
        </thead>
        <tbody>
        <?php


        $zf->PobierzListe();

        ?>

        </tbody>
    </table>



