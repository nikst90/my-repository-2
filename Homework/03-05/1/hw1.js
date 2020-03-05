//Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.

let arr = ["a", "b", "c"];
console.log (arr);

// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.

console.log (arr [1] );
console.log (arr [2] );
console.log (arr [3] );

// Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.

let arr1=["a","b","c","d"];
console.log arr1[0]+" + "+arr[1]+", "+arr[2]+" + "+arr[3]+"."]

// Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.

let arr = [2, 5, 3, 9];
let result1 = ((arr[0]*arr[1])+(arr[2]*arr[3]))
console.log (result1)

//Objektai (asociaciniai masyvai)
//Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.

let obj = {
    a: 1,
    b: 2,
    c: 3
}
console.log (obj[c]);
console.log (obj.c);

 //   Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną.
//   &&
//    Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. Atspausdinkite savaitės dieną naudojant sita kintamajį.


let weekdays = {
    1: "pirmadienis",
    2: "antradienis",
    3: "treciadienis",
    4: "ketvirtadienis",
    5: "penktadienis",
    6: "sestadienis",
    7: "sekmadienis"
}
let day_now = new Date();
let day= day_now.getDay();
console.log (weekdays [day]);



//    Daugialypiai masyvai
 //Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.

let arr2 = [[1, 2, 3], [4, 5, 6], [7,8,9]];
console.log(arr2[1][0]);


 //   Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.
let obj1 = {
    js: ['jQuery', 'Angular'],
    php: 'hello', css: 'world'
}
console.log(obj1.js[0]);

   // Sukurkite dvimatį ???????masyvą??????. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai. Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.

let lt = ["pirmadienis",
    "antradienis",
    "treciadienis",
    "ketvirtadienis",
    "penktadienis",
    "sestadienis",
    "sekmadienis"
]
let eng =["monday",
    "tuesday",
    "wednessday",
    "thursday",
    "friday",
    "satturday",
    "sunday"
    ]
let dual_arr = [lt, eng]
console.log(dual_arr[0][1]+" "+dual_arr[1][2]);

//    Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną (edited)

// ???????????????
