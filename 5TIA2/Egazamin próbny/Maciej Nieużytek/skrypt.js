


function aktywujZakladke(idzakladk) {
    document.getElementById('main1').style.display = 'none';

    document.getElementById('main2').style.display = 'none';

    document.getElementById('main3').style.display = 'none';
    document.getElementById(idzakladk).style.display = 'block';
}





function klient() {
    aktywujZakladke('main1');
}
function adres() {
    aktywujZakladke('main2');
}
function kontakt() {
    aktywujZakladke('main3');
}

function zatwierdz(){
let imie = document.getElementById('imie').value
let nazwisko = document.getElementById('nazwisko').value
let numer = document.getElementById('numer').value
let data = document.getElementById('data').value
let ulica = document.getElementById('ulica').value
let miasto = document.getElementById('miasto').value



console.log(imie, nazwisko, numer, data, ulica, miasto);


}