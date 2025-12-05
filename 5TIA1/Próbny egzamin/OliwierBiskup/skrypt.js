function FiltryPszczola(){
    let wyborBlur = document.querySelector("#blur");
    let wyborSepia = document.querySelector("#sepia");
    let wyborNegatyw = document.querySelector("#negatyw");
    let obrazPszczola = document.querySelector("#PszczolaObraz")



    if(wyborBlur.checked == true){
        obrazPszczola.style = "filter: blur(8px);";
    }
    if(wyborSepia.checked == true){
        obrazPszczola.style = "filter: sepia(100%);";
    }
    if(wyborNegatyw.checked == true){
        obrazPszczola.style = "filter: invert(100%);";
    }
}

/* JESTEM LENIWY */
function FiltryPomarancze_Kolorowe(){
    let obraz = document.querySelector("#PomaranczeObraz");
    obraz.style = "filter: none;";
}

function FiltryPomarancze_BW(){
    let obraz = document.querySelector("#PomaranczeObraz");
    obraz.style = "filter: grayscale(100%);";
}

function FiltryOwoce(){
    let obraz = document.querySelector("#OwoceObraz");
    let WartoscSuwaka = document.querySelector("#suwakOwoce").value;
    console.log(WartoscSuwaka);

    obraz.style = "filter: opacity("+WartoscSuwaka+"%);";
}

function FiltryZolw(){
    let obraz = document.querySelector("#ZolwObraz");
    let WartoscSuwaka = document.querySelector("#suwakZolw").value;

    obraz.style = "filter: brightness("+WartoscSuwaka+"%);";
}