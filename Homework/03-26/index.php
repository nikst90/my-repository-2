<?php
//-----------------------------------------------------------
$nr1 = "Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert metodą.";

$num = 3;

function alert($message)
{
    echo "<script>alert('$message');</script>";
}

alert($nr1);
alert($num);


////-----------------------------------------------------------
echo "Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.";

$a = 10;
$b = 2;
$resultSum = $a + $b;
$resultSub = $a - $b;
$resultMult = $a * $b;
$resultDev = $a / $b;

echo "<br><br>";

echo nl2br("$a + $b=$resultSum \n $a - $b=$resultSub \n $a * $b=$resultMult \n $a / $b=$resultDev");


echo "<br><br><br><br>";
////-----------------------------------------------------------
echo "Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo";

$c = 15;
$d = 2;
$result = $c + $d;

echo "<br><br>";

echo($c + $d = $result);


echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.";

$a2 = 17;
$b2 = 10;
$c2 = $d2 = $a2 - $b2;
$result2 = $c2 + $d2;

echo "<br><br>";


echo nl2br("$a2-$b2=$c2 \n $c2+$d2=$result2");


echo "<br><br><br><br>";
//-----------------------------------------------------------
//// KLAUSIMAS, kaip leisti „Hello World!" su kabutem?
echo "Sukurkite kintamąjį str ir priskirkite jam  Hello World! reikšmę. Parodykite šio kintamojo reikšmę ekrane";

$str = 'Hello World!';

echo "<br> <br> ";
echo $str;


echo "<br><br><br><br>";
////-----------------------------------------------------------
echo "Sukurkite kintamuosius str1 = 'Hello' ir str2 = 'World!'. Naudodami šiuos kintamuosius parodykite frazę „Hello World!";

$str1 = "Hello";
$str2 = "World!";

echo "<br> <br> ";
echo "$str1 $str2";


echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę Hello, %name%!";
$name = "Nikita";
echo "<br> <br> ";

echo("$str1, $name!");


echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite I'm %age% old!";

$age = 30;
echo "<br> <br> ";
echo "I am $age old!";


echo "<br><br><br><br>";
//KLAUSIMAS Kaip padaryt su alert?????
//-----------------------------------------------------------
echo "Paklauskite vartotojo vardo naudodamiesi promt metodais. Su alert parodykite pranešimą „Your name %name%" . "";
echo "<br><br>";
//prompt function
function prompt($prompt_msg)
{
    echo("<script type='text/javascript'> var answer = prompt('" . $prompt_msg . "'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return ($answer);
}

//program
$prompt_msg = "Enter name";
$name = prompt($prompt_msg);

$output_msg = "Your name  " . $name . ".";
echo($output_msg);


echo "<br><br><br><br>";
//-----------------------------------------------------------

echo "Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.";
echo "<br><br>";
$arr = [
    "a",
    "b",
    "c"
];
var_dump($arr);
echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.";
echo "$arr[0]";
echo "<br>";
echo "$arr[1]";
echo "<br>";
echo "$arr[2]";


echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.";
echo "<br><br>";
$arr1 = [
    "a",
    "b",
    "c",
    "d"
];
echo "$arr1[0]+$arr1[1], $arr1[2]+$arr1[3]";
echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.";
echo '<br>';
$arr3 = [
    2,
    5,
    3,
    9
];
echo '<br>';
$result1 = (($arr3[0] * $arr3[1]) + ($arr3[2] * $arr3[3]));
echo $result1;
echo "<br><br><br><br>";


//-----------------------------------------------------------
//-----------------------------------------------------------
//-----------------------------------------------------------
//-----------------------------------------------------------

//NOT DONE //NOT DONE //NOT DONE


////Objektai (asociaciniai masyvai)
////Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.
//
//let obj = {
//    a: 1,
//    b: 2,
//    c: 3
//}
//console.log (obj[c]);
//console.log (obj.c);

// //   Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną.
////   &&
////    Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. Atspausdinkite savaitės dieną naudojant sita kintamajį.
//
//
//let weekdays = {
//    1: "pirmadienis",
//    2: "antradienis",
//    3: "treciadienis",
//    4: "ketvirtadienis",
//    5: "penktadienis",
//    6: "sestadienis",
//    7: "sekmadienis"
//}
//let day_now = new Date();
//let day= day_now.getDay();
//console.log (weekdays [day]);
//
//
//
////    Daugialypiai masyvai
// //Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
//
//let arr2 = [[1, 2, 3], [4, 5, 6], [7,8,9]];
//console.log(arr2[1][0]);
//
//
// //   Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.
//let obj1 = {
//    js: ['jQuery', 'Angular'],
//    php: 'hello', css: 'world'
//};
//console.log(obj1.js[0]);
//
//   // Sukurkite dvimatį ???????masyvą??????. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai. Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
//
//let lt = ["pirmadienis",
//    "antradienis",
//    "treciadienis",
//    "ketvirtadienis",
//    "penktadienis",
//    "sestadienis",
//    "sekmadienis"
//]
//let eng =["monday",
//    "tuesday",
//    "wednessday",
//    "thursday",
//    "friday",
//    "satturday",
//    "sunday"
//]
//let dual_arr = [lt, eng]
//console.log(dual_arr[0][1]+" "+dual_arr[1][2]);
//
////    Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną (edited)
//
//// ???????????????
?>
