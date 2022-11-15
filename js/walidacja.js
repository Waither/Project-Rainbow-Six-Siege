//sprawdzanie czy są włączone ciasteczka
function ciasteczka() {
    if (navigator.cookieEnabled == false)  {
        alert("Wykryto brak obsługi plików cookies! Prosimy o włączenie tego ustawienia.");
    }
}

window.onload = ciasteczka;

//walidacja danych z formularza
function walidacjalog() {
    let z1 = document.forms["formularz"]["login"].value;
    let z2 = document.forms["formularz"]["pass"].value;
    if (z1=="" || z2=="") {
        document.getElementById("niepr").innerHTML="Podaj wszystkie dane."
        return false;
    }
}

function walidacjareg() {
    let z1 = document.forms["form1"]["login"].value;
    let z2 = document.forms["form1"]["mail"].value;
    let z3 = document.forms["form1"]["pass"].value;
    if (z1=="" || z2=="" || z3=="") {
        document.getElementById("niepr").innerHTML="Podaj wszystkie dane."
        return false;
    }
}