// switch(new Date().getDay()){
//     case 5:
//         text="Dziś jest piątek piąteczek piątunio";
//         break;
//     case 0:
//         text="Dziś jest niedziela niedzielka niedzielunia"
//         break;
//     default:
//         text="Trzymamy się do weekendu";
// }
// document.writeln(text);
// let liczba1 = Number( prompt("Podaj pierwszą liczbę"));
// let liczba2 = Number(prompt("Podaj drugą liczbę"));
// let operacja = prompt("Podaj operacje jaką chcesz wykonać")
// switch(operacja){
//     case "+":
//         wynik=liczba1+liczba2
//         break;
//     case "-":
//         wynik=liczba1-liczba2
//         break;
//     case "*":
//         wynik=liczba1*liczba2
//         break;
//     case "/":
//         wynik=liczba1/liczba2
//         break;
// }
// document.writeln("wynik =" + wynik)

let i=0
document.writeln("<table>")
while(i<=10){
    document.writeln("<tr><td>"+ i++ + "</td></tr>")
}
document.writeln("</table>")

for (let x=10; x>=1; x--){
  console.log("liczba:" + x)
}

