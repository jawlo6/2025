let numer = 1

function wPrawo(){
let zdjecie = document.querySelector('#zdjecie');
numer++;
if(numer>7){
    numer = 1;
}
 zdjecie.src = `${numer}.jpg`; 

}


function wLewo(){
    let zdjecie = document.querySelector('#zdjecie');
    numer--;
    if(numer<1){
        numer = 7;
    }
    zdjecie.src = `${numer}.jpg`;
    
}
