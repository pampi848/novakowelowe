<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet"/>
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
            <input required type="text" id="imie" name="formularz[imie]"/>
            <input required type="text" id="nazwisko" name="formularz[nazwisko]"/>
            <input required type="number" id="telefon" name="formularz[telefon]"/>
            <input required type="email" id="mail" name="formularz[mail]"/>
            <input type="submit"/>
        </form>
        <span id="messeges"><?=isset($_SESSION["messeges"])?$_SESSION["messeges"]:""?></span>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>