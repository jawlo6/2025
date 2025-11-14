class Enemy {
    constructor(x,y){
        this.x = x
        this.y = y;
        this.type = "normalny";
    }
    fly() {
 return this.type + "-lecę"
}
}
var enemyNormal = new Enemy (10,20)
console.log(enemyNormal.shoot()) //błąd - nie ma takiej metody
console.log(enemyNormal.fly()) //"normalny - lece"

class EnemyShooter extends Enemy{
    constructor(x,y){
        super(x,y);
        this.type = 'strzelający';
    }
    shoot() {
        return this.type + '- strzelam'
    }
}
var enemyNormal = new Enemy (10,20)
var enemyShooter = new EnemyShooter(20,30)
console.log(enemyShooter.shoot()) //"strzelający - strzelam"
console.log(enemyShooter.fly()) //"Strzelający - lece"