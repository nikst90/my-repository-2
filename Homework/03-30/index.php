<?php
echo 'Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos < h3> HTML tag <br><br> ';

function print3($par1, $par2, $par3)
{
    echo $par1;
    echo "<br>";
    echo $par2;
    echo "<br>";
    echo $par3;
    echo "<br>";
} ?>

    <h3><?php echo print3("pirmas par", "antras par", "trecias par"); ?>
    </h3>

<?php

echo '<br><br><hr>';
echo 'Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo vietą. <br><br>';

function multiplipar($par1, $par2)
{
    echo $par1 * $par2;
}

;
multiplipar(11, 3);

echo '<br><br><hr>';
echo 'Ištrinti iš masyvo elementą 3 skirtingais būdais<br><br>';

$test3 = [
    "Pirmas",
    "Antras",
    "Trecias",
    "Ketvirtas",
    "Penktas"
];

unset($test3[1]);
array_splice($test3, 1, 1);
array_pop($test3);

foreach ($test3 as $value) {
    echo "$value<br>";
}

echo '<br><br><hr>';
// KLAUSIMAS, Kaip padaryti kad numeriai eitu is eiles 1. 2. 3.
echo 'Išvesti į ekraną 10 kartų žodį \'Labas\'<br><br>';

function hellox10()
{
    $i = 0;
    while ($i < 10) {
        echo "<ol><li>Labas</li></ol>";
        $i++;
    }
}

hellox10();
echo '<br><br><hr>';
echo 'Išvesti į ekraną skaičius nuo 1 iki 10<br><br>';

function from1to10()
{
    $i = 1;
    while ($i <= 10) {
        echo "$i <br>";
        $i++;
    }
}

from1to10();

echo '<br><br><hr>';
// Klausimas, kaip padaryt kad po 100 nebutu ;?
echo 'Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100<br><br>';
function oneto100even()
{
    $i = 1;
    while ($i <= 100) {
        if ($i % 2 == 0 //&& $i != 100){
        ) {
            echo "$i; ";
        }
//        if ($i = 100) {
//            echo "$i";
//        }
        $i++;
    }
}

oneto100even();
echo '<br><br><hr>';
echo 'Išvesti į ekraną visus masyvo elementus(skaičiu masyvas)<br><br>';

$test2 = [
    12,
    2,
    33,
    51
];

foreach ($test2 as $value) {
    echo "$value <br>";
}

echo '<br><br><hr>';
echo 'Išvesti į ekraną visų masyvo elementų sumą .<br><br>';

echo array_sum($test2);


echo '<br><br><hr>';
echo 'Išvesti į ekraną visų masyvo elementų sandaugą <br><br>';

echo array_product($test2);

echo '<br><br><hr>';
echo 'Išvesti visų masyvo elementų vidurkį;<br><br>';

$test2mid = array_sum($test2) / count($test2);

echo $test2mid;

echo '<br><br><hr>';
echo 'Padidinti kiekviena masyvo elementą vienetu;<br><br>';

foreach ($test2 as $plus1) {
    echo($plus1 + 1);
    echo '<br>';
}

echo '<br><br><hr>';
echo 'Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestu i ekrana . (||, while) Bonus<br><br>';

function diceroll()
{
    $chance = rand(1, 6);
    while ($chance != 5 || $chance != 6) {

        if ($chance == 5) {
            echo "Ismetei 5!!";
            break;
        }
        if ($chance == 6) {
            echo "Ismetei 6!";
            break;
        } else {
            $chance = rand(1, 6);
            echo "ismetei $chance";
            echo '<br><br>';
        }
    }

}

diceroll();

echo '<br><br><hr>';
echo 'Metame 2 kauliukus(arba vieną kauliuką 2 kartus). taisyklės:
Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote . Jeigu kauliukų suma daugiau už 5 ir:
-išmesta buvo 6 ir 6, reiškia - laimėjote dviratį .
-abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną .
-kitais atvejais – kauliukas metamas dar kartą .
» Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
    » Visa zaidimo eiga turėtų būti išvesta į ekraną .<br><br>';

function diceroll2()
{
    $chance = rand(1, 6);
    echo '<br>';
    $chance2 = rand(1, 6);
    echo '<br>';
    while ($chance != 5 || $chance != 6) {
        if ($chance + $chance2 < 5) {
            echo "Pralaimejai nes ismetei $chance ir $chance2.<br> $chance+$chance2<5";
            break;
        }
        if ($chance == 6 && $chance2 == 6) {
            echo "Laimejai dvirati!<br>Nes ismetei $chance ir $chance2";
            break;
        }
        if ($chance == $chance2) {
            echo "laimejai bilieta i kina! <br>nes Ismetei $chance ir $chance2";
            break;
        } else {
            $chance = rand(1, 6);
            $chance2 = rand(1, 6);
            echo "ismetei $chance ir $chance2";
            echo '<br><br>';
        }
    }
}

diceroll2();
echo '<br><br>';
