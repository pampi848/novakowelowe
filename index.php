<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css"/>
    <link href="style.css" rel="stylesheet"/>
    <!--FreeFavicon.com-->
    <link href="favicon.ico" rel="icon" type="image/x-icon"/>
    <title>Strona Główna</title>
</head>
<body>
<div id="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-9" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Skull" id="icon" src="viking-helmet-48-266894.png">
                </a></div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="list.php">List</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        <div class="row">
            <form name="formularz" method="post" action="add.php" id="formularz" onsubmit="return validateForm()"/>
            <div class="col-xs-12 center-block text-center">
                <i>Proszę podać dane.</i>
            </div>
            <div class="col-xs-6 labels">
                <label for="imie">Imię: </label> <br/> <br/>
                <label for="nazwisko">Nazwisko: </label> <br/> <br/>
                <label for="telefon">Telefon: </label> <br/> <br/>
                <label for="mail">E-mail: </label> <br/> <br/>
            </div>
            <div class="col-xs-6">
                <input required class="addinput" type="text" id="imie" name="formularz[imie]"/> <br/>
                <input required class="addinput" type="text" id="nazwisko" name="formularz[nazwisko]"/> <br/>
                <input required class="addinput" type="number" id="telefon" name="formularz[telefon]"/> <br/>
                <input required class="addinput" type="email" id="mail" name="formularz[mail]"/>
            </div>
            <div class="col-xs-12 center-block text-center">
                <input type="submit" value="Zatwierdź"/>
                <div id="messeges"
                     class='alert alert-danger <?= !isset($_SESSION["messeges"]) || empty($_SESSION["messeges"]) ? "hidden" : "" ?>'
                     role='alert'><?= isset($_SESSION["messeges"]) ? $_SESSION["messeges"] : "" ?></div>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>