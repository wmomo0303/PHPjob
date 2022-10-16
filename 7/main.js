//問１：

let numbers = [2, 5, 12, 13, 15, 18, 22];

//ここに答えを実装してください。↓↓↓
function isEven() {

    for(let i=0; i<numbers.length; i++) {
        if(numbers[i] % 2 === 0) {

            let num = numbers[i];
            console.log(num + 'は偶数です');

        }
    }
}

isEven();




//問２：

class Car {

    constructor(gass, numbar) {
        this.gass = gass;
        this.numbar = numbar;
    }

    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.numbar}です`);
    }
}


let car1 = new Car(14, 2343);
car1.getNumGas();
