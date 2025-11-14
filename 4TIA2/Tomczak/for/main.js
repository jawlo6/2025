// const cars =["Audi","BMW","Mini"]
// cars.forEach(mojaFunkcja)
// function mojaFunkcja(value,index){
//     console.log(`indeks=${index} - wartość = ${value}`)
// }
// for (let i=0; i<10;i++){
//     if(i == 5)
//         continue;
//     console.log(i)
// }
// function test(){
//     console.log(arguments)
// }
// test();
// test(1,2,3,4);
// test("ala","ma","kota")


// function increase(){
//     let x = 0
//     for(let i=0; i<arguments.length;i++){
//      x += arguments[i]
//     }
//      return x;
// }
// console.log(increase(1,2,3))

function superSum(...r){
    console.log(r)
}
superSum(1,4);
superSum(1,2,3,4)