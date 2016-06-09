<?php


include_once"Zarzadzaj_baza_klientow.php";

$zbk=new Zarzadzaj_baza_klientow();


?>

<button type="button" onclick="location.href='./index.php?var=klient&dodaj=true'" class="btn btn-default btn-sm">Dodaj klienta</button>
<?php
if($_GET[dodaj]!='true' && !isset($_GET[szczegoly]) ) {

    ?>

    <table class="table table-striped">
        <thead>
        <tr>

        </tr>
        </thead>
        <tbody>
        <?php


        $zbk->PobierzListe();

        ?>

        </tbody>
    </table>

<?php
}
if($_GET[dodaj]=='true'){

    $zbk->Formularz('dodawanie',null);

}

if($_GET[edycja]=='true') {

    $zbk->Formularz('edycja',$_GET['id']);
}


if($_GET[usun]=='true') {

    $zbk->Formularz('usun',$_GET['id']);
}

if($_GET[szczegoly]=='true'){
?>
<table class="table table-striped">
        <thead>
        <tr>
            <td>id</td>
            <td>imie</td>
            <td>nazwisko</td>
            <td>pesel</td>

        </tr>
        </thead>
        <tbody>
        <?php


        $zbk->Szczegolowo($_GET['id']);

        ?>

</tbody>
</table>

<?php



}
?>