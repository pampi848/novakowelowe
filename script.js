function validateForm() {
    var imie = $("#imie").value;
    var nazwisko = $("#nazwisko").value; //document.forms["formularz"]["nazwisko"]
    var mail = $("#mail").value;
    var telefon = $("#telefon").value;
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

    if(messeges != "") {
        $("#messeges").html(messeges)
            .removeClass("hidden");
        messeges = "";
    }
    else $("#formularz").submit();
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


