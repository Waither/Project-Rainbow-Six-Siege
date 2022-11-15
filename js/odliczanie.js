//odliczanie do zalogowania
function odliczanie() {
    document.getElementById("tekst").innerHTML="<br><h3>Sprawdzana jest poprawność podanych danych z bazą.</h3>Prosimy chwilę poczekać.<br>Szacowany czas sprawdzenia: " + t + "<br><br>";
    t--;
    if (t<0) {
        location.replace("profil.php");
    }
}
var t=5;
var x=setInterval(odliczanie,1000);