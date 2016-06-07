
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


<body>

<div class="container-fluid">

    <div class="buttony">
        <button type="button" onclick="location.href='./index.php?var=zlecenie'" class="btn btn-default btn-sm">Zarządzaj zleceniami</button>
        <button type="button" onclick="location.href='./index.php?var=klient'" class="btn btn-default btn-sm">Zarządzaj baza klientów</button>
        <button type="button" onclick="location.href='./index.php?var=magazyn'" class="btn btn-default btn-sm">Zarządzaj magazynem</button>
        <button type="button" onclick="location.href='./index.php?var=faktura'" class="btn btn-default btn-sm">Zarządzaj fakturami</button>



    </div>


    <?php
    if($_GET['var']==klient) include "./Zarzadzaj_baza_klientow/Zarzadzaj_baza_klientow.php";
    ?>

</div>

</body>
</html>


