// const dog = {
//     name:"Szaman", //właściwość
//     speed: 1000,
//     showText(){
//        return "Lubie walczyć ze złem" //metoda
//     }
// }
// console.log(dog.name) // odwołanie się do składowej
// console.log(dog.showText()) //uruchomienie metody

// dog.type = "pies"
// dog.legs = 4
// dog.eat = function(){
//     return "jem dobre rzeczy";
// }
// console.log(dog["type"])

// const car = { 
//     brand:"Mercedes",
//     color:"czerwony",
//     showText(){ },
//     drive() {
//     console.log(this) //car
//     console.log(`${this.brand} sobie jedzie`)
// },
// showText(){
//     console.log(`${this.brand} jest koloru ${this.color}`);
// }
// }
// car.drive()
// car.showText()

// const uczen = {
//     name: "Nikodem",
//     class: "4TIA",
//     showText(){
//         return console.log(`To jest ${this.name} i jest w klasie ${this.class}`)
//     }
// }
// console.log(uczen.showText())

// function Enemy(speed,power){
//     this.live = 3
//     this.speed = speed
//     this.power = power;
//     this.print = function(){
//         console.log(`Przeciwnik ma ${this.live} życia `)
//     }
// }

// class Animal{
//     constructor(name) {
//         this.name = name
//         this.legs = 4;
//         this.type = "animal"
//         console.log(`tekst w konstruktorze`)
//     }
//     show(){
//         console.log(`Zwierze nazwya się ${this.name} i ma ${this.legs} nogi`);
//     }
// }
// const pet1 = new Animal("Koń");
// pet1.show();

class SimpleClass {
    #privateNumber = 102; //prywatne musimy przed konstruktorem
    publicNumber = null;

    constructor(nr){
        this.publicNumber = nr ;
        this.#privateNumber = 102;
    }
    publicMethod() {// to ma być publiczne
        console.log(this.publicNumber);
    }
    #privateMethod(){
        console.log(this.#privateNumber);
    }
}
const my = new SimpleClass(10)

my.publicNumber = 103
my.publicMethod()
my.#privateMethod()  //błąd
my.#privateNumber = "ala ma kota" //błąd