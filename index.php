
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Technika estradowa</title>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    .buttony{
        position: absolute;

        width: 100%;

    }

    .menu{
        position: absolute;
        left: 50%;
        margin-left: -300px;
    }

    .content{
        position: absolute;
        width: 1200px;
        min-height: 1200px;
        left: 40px;
        top:60px;
        background-color: #f8f8f8;
    }
</style>


<body>

<div class="container-fluid">

    <div class="buttony" >
        <div class="menu">
            <button type="button" onclick="location.href='./index.php?var=klient'" class="btn btn-default btn-sm">Zarządzaj baza klientów</button>
            <button type="button" onclick="location.href='./index.php?var=faktura'" class="btn btn-default btn-sm">Zarządzaj fakturami</button>
             <button type="button" onclick="location.href='./index.php?var=zlecenie'" class="btn btn-default btn-sm">Zarządzaj zleceniami</button>

             <button type="button" onclick="location.href='./index.php?var=magazyn'" class="btn btn-default btn-sm">Zarządzaj magazynem</button>

        </div>
    </div>


    <div class="content">

        <?php

        if($_GET['var']==klient) include "./Zarzadzaj_baza_klientow/GuiKlienci.php";
        if($_GET['var']==zlecenie) include "./Zarzadzaj_zleceniami/GuiZlecenia.php";
        if($_GET['var']==faktura) include "./Zarzadzaj_fakturami/GuiFaktury.php";
        if($_GET['var']==magazyn) include "./Zarzadzaj_magazynem/GuiMagazyn.php";




        ?>


    </div>


</div>

</body>
</html>


