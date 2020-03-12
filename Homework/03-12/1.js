//Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.

function square(squareid){
    return squareid ** 2;
    }
square(5);

//Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.

function sumNr(sumid,sumid2){
    let sumid3=sumid+sumid2;
    return  sumid3;
}
sumNr( 1,2)

//  Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.

function solution(item1,item2,item3){
    let sumid4=(item2-item1)/item3;
    return  sumid4;
}
solution(2,14,3);


// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.

function dayOfTheWeek (dayNr) {
    let week = {
        1: "pirmadienis",
        2: "antradienis",
        3: "treciadienis",
        4: "ketvirtadienis",
        5: "penktadienis",
        6: "sestadienis",
        7: "sekmadienis"
    }
    let dayNrCheck=week[dayNr];
    return dayNrCheck;
}
dayOfTheWeek(4);

