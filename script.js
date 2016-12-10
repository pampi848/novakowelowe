function validateForm() {
    var imie = $()//document.forms["formularz"]["imie"].value;
    var nazwisko = document.forms["formularz"]["nazwisko"].value;
    var mail = document.forms["formularz"]["mail"].value;
    var telefon = document.forms["formularz"]["telefon"].value;
    var messeges = "";

    if(imie == "" || nazwisko == "" || mail == "" || telefon == ""){
        messeges = "Proszę uzupełnić wszystkie pola!";
    }
    else if(imie.length < 3 || nazwisko.length < 3 || telefon.length != 9) {
        messeges = "Zarówno imię jak i nazwisko powinny składać się z minimum 3 znaków, <br/> natomiast numer telefonu powinien zawierać 9 cyfr!";
    }
    else if(!validateEmail(mail)){
        messeges = "Nieprawidłowy adres e-mail!";
    }
    else return true;
    $("#messeges").html(messeges)
                  .removeClass("hidden");

    return false;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


