<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" />
    <link href="style.css" rel="stylesheet"/>
    <!--FreeFavicon.com-->
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <title>Strona Główna</title>
</head>
<body>
<div id="container">
    <div id="header">
        <div id="logo"><img src="baner.jpg"/></div>
    </div>
    <div id="sidebar">
        Menu
        <ol>
            <li><a href="list.php">Lista</a></li>
            <li><a href="#">Druga strona</a></li>
        </ol>
    </div>
    <div id="content">
        <i>Proszę podać dane.</i>
        <br/>
        <form name="formularz" method="post" action="add.php" onsubmit="return validateForm()"/>
            <label for="imie">Imię: </label> <input required type="text" id="imie" name="formularz[imie]"/> <br/>
            <label for="nazwisko">Nazwisko: </label> <input required type="text" id="nazwisko" name="formularz[nazwisko]"/> <br/>
            <label for="telefon">Telefon: </label> <input required type="number" id="telefon" name="formularz[telefon]"/> <br/>
            <label for="mail">E-mail: </label> <input required type="email" id="mail" name="formularz[mail]"/> <br/>
            <input type="submit" value="Zatwierdź"/>
        </form>
        <div id="messeges" class='alert alert-danger <?=!isset($_SESSION["messeges"]) || empty($_SESSION["messeges"]) ? "hidden" : ""?>' role='alert'><?=isset($_SESSION["messeges"])?$_SESSION["messeges"]:""?></div>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>