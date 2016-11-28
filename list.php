<?php session_start();
$lista = "to co przyszło z bazy";
?>
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
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="#">Druga strona</a></li>
        </ol>
    </div>
    <div id="content">
        <table>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Telefon</th>
                <th>E-mail</th>
            </tr>
            <?php if(isset($lista) && is_array($lista)){?>
            <?php foreach ($lista as $obj => $value){?>
            <tr>
                <td><?=$obj.imie?></td>
                <td><?=$obj.nazwisko?></td>
                <td><?=$obj.telefon?></td>
                <td><?=$obj.mail?></td>
            </tr>
            <?php }} ?>
        </table>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>