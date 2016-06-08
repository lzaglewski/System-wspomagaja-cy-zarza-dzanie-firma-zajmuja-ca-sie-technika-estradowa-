<?php


include_once"Zarzadzaj_baza_klientow.php";

$zbk=new Zarzadzaj_baza_klientow();


?>

<button type="button" onclick="location.href='./index.php?var=klient&dodaj=true'" class="btn btn-default btn-sm">Dodaj klienta</button>
<?php
if($_GET[dodaj]!='true') {

    ?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>pesel</th>
        </tr>
        </thead>
        <tbody>
        <?php


        $zbk->PobierzListe();

        ?>

        </tbody>
    </table>

<?php
}else{

    $zbk->Formularz('dodawanie');


}
?>