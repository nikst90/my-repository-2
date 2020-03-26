<?php
////-----------------------------------------------------------
$nr1 ="Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert metodą.";

$num = 3;

function alert($message) {
    echo "<script>alert('$message');</script>";
}
alert($nr1);
alert($num);



echo "<br><br><br><br>";
////-----------------------------------------------------------
echo "Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.";

$a = 10;
$b = 2;
$resultSum= $a+$b;
$resultSub= $a-$b;
$resultMult= $a*$b;
$resultDev= $a/$b;

echo "<br><br>";

echo nl2br("$a + $b=$resultSum \n $a - $b=$resultSub \n $a * $b=$resultMult \n $a / $b=$resultDev");



echo "<br><br><br><br>";
////-----------------------------------------------------------
echo "Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo";

$c = 15;
$d = 2;
$result = $c + $d;

echo "<br><br>";

echo ($c+$d=$result);



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

echo ("$str1, $name!");



echo "<br><br><br><br>";
//-----------------------------------------------------------
echo "Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite I'm %age% old!";

$age = 30;
echo "<br> <br> ";
echo "I am $age old!";



echo "<br><br><br><br>";
//KLAUSIMAS Kaip padaryt su alert?????
//-----------------------------------------------------------
echo "Paklauskite vartotojo vardo naudodamiesi promt metodais. Su alert parodykite pranešimą „Your name %name%"."";
echo "<br><br>";
//prompt function
function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}

//program
$prompt_msg = "Please type your name.";
$name = prompt($prompt_msg);

$output_msg = "Your name  ".$name.".";
echo($output_msg);

?>

