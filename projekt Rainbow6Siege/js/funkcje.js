//data
const miesiac = new Array();
    miesiac[0] = "Stycznia";
    miesiac[1] = "Lutego";
    miesiac[2] = "Marca";
    miesiac[3] = "Kwietnia";
    miesiac[4] = "Maja";
    miesiac[5] = "Czerwca";
    miesiac[6] = "Lipca";
    miesiac[7] = "Sieprnia";
    miesiac[8] = "Września";
    miesiac[9] = "Października";
    miesiac[10] = "Listopada";
    miesiac[11] = "Grudnia";
function zero(x) {
    if (x < 10) {x = "0" + x}
    return x;
}
function data() {
    const data = new Date();
    let data1 = data.getDate() + " " + miesiac[data.getMonth()] + " " + data.getFullYear() + " r. " + zero(data.getHours()) + ":" + zero(data.getMinutes()) + ":" + zero(data.getSeconds());
    document.getElementById("data1").innerHTML="Aktualna data i godzina: " + data1;
}
var x=setInterval(data,1000);

//wielkość czcionki
let czcionka = 16;
function zwieksz() {
    if (czcionka < 24) {
        czcionka++;
        document.getElementById("tekst").style.fontSize = czcionka;
    }
}
function zmniejsz() {
    if (czcionka > 12) {
        czcionka--;
        document.getElementById("tekst").style.fontSize = czcionka;
    }
}

//rodzaj czcionki
let zmcz = 1;
function zmiencz() {
    if (zmcz == 1) {
        document.getElementById("tekst").style.fontFamily = "Times New Roman";
        zmcz++;
    }
    else {
        document.getElementById("tekst").style.fontFamily = "Arial, Helvetica, sans-serif";
        zmcz--;
    }
}