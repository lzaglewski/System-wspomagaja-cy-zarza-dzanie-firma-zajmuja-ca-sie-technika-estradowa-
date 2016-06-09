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

<?php
if($_GET[dodaj]!='true' && !isset($_GET[szczegoly]) ) {

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

<?php
}
?>


<?php
if($_GET[szczegoly]=='true'){
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>id</td>
            <td>imie</td>
            <td>nazwisko</td>
            <td>Klient</td>
            <td>sprzęt</td>
            <td>suma</td>

        </tr>
        </thead>
        <tbody>
        <?php


        $zf->Szczegolowo($_GET['id']);

        ?>

        </tbody>
    </table>


<?php
}
    ?>

