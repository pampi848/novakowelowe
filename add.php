<?php
session_start();
function validateForm() {
$imie = $_POST["formularz"]["imie"];
$nazwisko = $_POST["formularz"]["nazwisko"];
$mail = $_POST["formularz"]["mail"];
$telefon = $_POST["formularz"]["telefon"];
$_SESSION["messeges"] = "";

if($imie == "" || $nazwisko == "" || $mail == "" || $telefon == ""){
    $_SESSION["messeges"] .= "Proszę uzupełnić wszystkie pola!<br/>";
}
if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
    $_SESSION["messeges"] .= "Nieprawidłowy adres e-mail!<br/>";
}
if(strlen($imie) < 3 || strlen($nazwisko) < 3 || strlen($telefon) != 9){
    $_SESSION["messeges"] .= "Zarówno imię jak i nazwisko powinny składać się z minimum 3 znaków, <br/> natomiast numer telefonu powinien zawierać 9 cyfr!";
}

if($_SESSION["messeges"] != "")header('Location: index.php');
else{
    //TODO: dodaj do bazy danych
    header('Location: list.php');
}

}
validateForm();