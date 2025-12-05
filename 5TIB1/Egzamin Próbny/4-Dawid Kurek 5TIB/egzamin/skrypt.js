let zdjecieindex=1
const zdjecie= 7
function kolejne(){
zdjecieinex ++;
if (zdjecieindex < zdjecia){
    zdjecieindex=1
}
 aktualizacja();
}


function poprzednie(){
zdjecieinex --;
if (zdjecieindex < zdjecia){
    zdjecieindex=1
}
 aktualizacja();
}
function aktualizacja(){
    const zdjecieElement= document.querySelector("#środkowy img")
    zdjecieElement.src = zdjecieindex + ".jpg";

}