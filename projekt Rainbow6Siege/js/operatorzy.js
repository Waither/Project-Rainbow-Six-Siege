//zmiana operatorów
var opat = document.getElementsByClassName("operatorat");
var opobr = document.getElementsByClassName("operatorobr");
function atak() {
	for (var i=0; i<opat.length; i++) {
		opat[i].style.display = "inline-block";
	}
	for (var i=0; i<opobr.length; i++) {
		opobr[i].style.display = "none";
	}
}
function obr() {
	for (var i=0; i<opat.length; i++) {
		opat[i].style.display = "none";
	}
	for (var i=0; i<opobr.length; i++) {
		opobr[i].style.display = "inline-block";
	}
}
function atobr() {
	for (var i=0; i<opat.length; i++) {
		opat[i].style.display = "inline-block";
	}
	for (var i=0; i<opobr.length; i++) {
		opobr[i].style.display = "inline-block";
	}
}