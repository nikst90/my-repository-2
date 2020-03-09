//Masyvu funkcijos
//Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
let arr=[1,2,3];
let arr1=[4,5,6];
let arr1_2=arr.concat(arr1)


  //  Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.

arr = [1,2,3];
arr.reverse();



//Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.

arr = [1,2,3]
arr.push (4, 5, 6);
arr.unshift(-1, -2, -3,)


 //   Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let arr2 = ["html", "css", "js"];
console.log (arr2[0]+" "+ arr2[arr2.length-1]);

  //  Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let arr3 = [3, 4, 1, 2, 7];
arr3.sort()

// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let arr4 = [1, 2, 3, 4, 5];
arr4.pop();
arr4.pop();


//Duotas masyvas [1, 2, 3, 4, 5]. Konvertuokite masyvą į [1, 4, 5].
arr4 = [1, 2, 3, 4, 5];
arr4.splice(1,2);

   // For ir While
//Atspausdinkite skaičių stulpelį nuo 1 iki 100.

let i = 0
while (i <=99){
    i++;
    console.log(i)
}

    //Atspausdinkite skaičių stulpelį nuo 11 iki 33.
let i = 10
while (i <=32){
    i++;
    console.log(i)
}

    //Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.
for (i=2;i<=100;i=i+2){
    console.log(i);
}

    //Naudodami ciklą parodykite sumą nuo 1 iki 100.
var sum = 0;
for (var i = 1; i <= 100; i++) {
    sum = sum + i;
}
console.log(sum);


    //For ir masyvai
//Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.


let arr5= [1, 2, 3, 4, 5];
let i=0;
for (i=0; i<=arr5.length-1; i++ ){
    console.log(arr5[i]);
}



//  Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
 arr5= [1, 2, 3, 4, 5];
sum=0
let i=0
for (i=0; i<=arr5.length-1; i++ ){
    console.log(sum=sum+arr5[i]);
}


// for-in
//Duotas objektas green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.

let colours={
    green: "žalia",
    red: "raudona",
    blue: "mėlyna"}

for (let property in colours){
    console.log(`${property} ${colours[property]}`)
}

   // Duotas objektas su raktais Mantas, Paulius, Mindaugas su reikšmėm 200, 300, 300. Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

let names= {
    "mantas": 200,
    "paulius": 300,
    "mindaugas": 300
}
for( let wage in names){
    console.log(`${wage} - ${names[wage]} eur `)
}

   // Duotas masyvas su elementais 2, 5, 9, 15, 0, 4. Naudodami for ir if parodykite masyvo elementus kurie yra daugiau nei 3, bet mažiau nei 10
let arr6 = [2, 5, 9, 15, 0, 4];
let i=0;
for( i=0; i<=arr6.length-1; i++)
{
    if (arr6[i]>3 && arr6[i]<10){
        console.log(arr6[i])
    }
}

    //Duotas masyvas su skaičiais. Skaičiai gali būti teigiami ir neigiami. Raskite teigiamų masyvo skaičių sumą.

let arr7 = [-9, -5, -1, 5, 3, 6];
let i=0;
let sum=0;
for( i=0; i<=arr7.length-1; i++)
{
    if (arr7[i]>0 ){

        sum=sum+arr7[i]

    }
}
console.log(sum)


    // Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus šio masyvo elementus pasinaudoję ciklais for, while
let arr8 = [1, 2, 3, 4, 5];
i=0;
for( i=0; i<=arr8.length-1; i++){
    while (i<=arr8.length-1){
        i++


    }
    console.log(arr8[i])
}
// BAD // ^^^^

  // Duotas masyvas su elementais [2, 3, 4, 5]. Parodykite šio masyvo elementų produktą (daugyba), naudokite for ciklą.

let arr9=[2, 3, 4, 5];
i=0;
sum = 1;
for( i=0; i<=arr9.length-1; i++){
    sum=sum*arr9[i];
}

console.log(sum);


    //Duotas objektas su raktais Vilnius, Riga, Talinas ir reikšmėm Lietuva, Latvija, Estija. Parodykite eilutes tokiu formatu: Vilnius yra Lietuva naudodami for-in ciklą;

let cities = {
    "Vilnius": "Lietuva",
    "Riga": "Latvia",
    "Talinas": "Estija"
};
    for( let capital in cities){
        console.log(`${capital} yra ${cities[capital]}`)
    }


