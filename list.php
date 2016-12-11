<?php session_start();

try {
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "formularzdb";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $stmt = $conn->prepare('SELECT * FROM `users`');
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
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
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="list.php">List</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        <table class="table table-striped table-bordered" style="background-color: whitesmoke">
            <thead>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Telefon</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($lista) && is_array($lista)){?>
            <?php foreach ($lista as $obj){?>
            <tr>
                <th scope="row"><?=$obj->id?></th>
                <td><?=$obj->imie?></td>
                <td><?=$obj->nazwisko?></td>
                <td><?=$obj->telefon?></td>
                <td><?=$obj->mail?></td>
            </tr>
            <?php }} ?>
            </tbody>
        </table>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>