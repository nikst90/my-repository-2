<?php


$theNumber = 26;

if ($theNumber > "25") {
    echo "Vykdom koda!";
}
echo "<br><br>";

$theNumber2 = 24;

if (is_int($theNumber2)) {
    echo "Vykdom koda vel!";
}


echo "<br><br>";


$age = 11;

if (0 < $age && $age <= 3) {
    echo 'kudikis';
} else if (4 <= $age && $age <= 9) {
    echo 'vaikas';
} else if (10 <= $age && $age <= 17) {
    echo 'paauglis';
} else if (18 <= $age && $age <= 30) {
    echo 'jaunuolis';
} else {
    echo 'senis';
}

echo "<br><br>";


$weekday = 2;
switch ($weekday) {
    case "1":
        echo "pirmadienis";
        break;
    case "2":
        echo "antradienis";
        break;
    case "3":
        echo "treciadienis";
        break;
    case "4":
        echo "ketvirtadienis";
        break;
    case "5":
        echo "penktadienis";
        break;
    case "6":
        echo "sestadienis";
        break;
    case "7":
        echo "sekmadienis";
        break;
    default:
        echo "gyveni ne zemei";
}
?>
