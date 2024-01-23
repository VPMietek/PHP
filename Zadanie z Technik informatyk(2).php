<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania w PHP</title>
</head>
<body>

<?php

$a = 10;
$b = 2;
$wynik1 = ($b != 0) ? $a / $b : "Nie można obliczyć wyniku. Dzielnik równy 0.";
echo "Wynik równania x = a/b: $wynik1<br>";


$c = 5;
$d = 0;
$wynik2 = ($b != 0 && $d != 0) ? ($a / $b) + ($c / $d) : "Nie można obliczyć wyniku. Dzielnik równy 0.";
echo "Wynik równania x = a/b + c/d: $wynik2<br>";


$wynik3 = ($b - 4 != 0) ? ($a + 6) / ($b - 4) : "Nie można obliczyć wyniku. Dzielnik równy 4.";
echo "Wynik równania x = (a+6) / (b – 4): $wynik3<br>";


$liczba = 7;
echo ($liczba % 2 == 0) ? "$liczba jest liczbą parzystą.<br>" : "$liczba nie jest liczbą parzystą.<br>";


$li1 = 15;
$li2 = 3;
echo ($li2 != 0) ? (($li1 % $li2 == 0) ? "$li1 jest podzielna przez $li2.<br>" : "$li1 nie jest podzielna przez $li2.<br>") : "Nie można sprawdzić, czy liczba jest podzielna przez 0.<br>";


$sliczba = -8;
echo ($sliczba > 0) ? "$sliczba jest liczbą dodatnią.<br>" : (($sliczba < 0) ? "$sliczba jest liczbą ujemną.<br>" : "$sliczba jest równa 0.<br>");

$liczba1 = 20;
$liczba2 = 10;
$liczba3 = 15;

$najwieksza = $liczba1;

if ($liczba2 > $najwieksza) {
    $najwieksza = $liczba2;
}

if ($liczba3 > $najwieksza) {
    $najwieksza = $liczba3;
}

echo "Największa liczba spośród $liczba1, $liczba2 i $liczba3 to: $najwieksza";

?>

</body>
</html>
