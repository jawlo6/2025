// let teraz = new Date();
// let godzina = teraz.getHours();
// let minuty = teraz.getMinutes();
// let sekundy = teraz.getSeconds();
// document.writeln("teraz jest: "+ godzina + ":" + minuty + ":" + sekundy);
// let NewYear2025 = new Date(2025, 0, 1);
// document.writeln(NewYear2025);
const miesiace = ["Styczen","Luty","Marzec","Kwiecien","Maj","Czerwiec","Lipiec","Sierpien","Wrzesien","Pazdziernik","Listopad","Grudzien"]
const today = new Date(2025,9,11)
const month = today.getMonth();
console.log("Dziś jest " + miesiace[month])