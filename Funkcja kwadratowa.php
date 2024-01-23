<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie </title>
</head>
<body>
 
SUMA TRZECH LICZB
 
<br/>
<br/>
 <form action="" method="GET">
    a = <input placeholder = "Podaj A" type = "number" id = "a" name="a"> <br/>
    b = <input placeholder = "Podaj B" type = "number" id = "b" name="b"> <br/>
    c = <input placeholder = "Podaj C" type = "number" id = "c" name="c"> <br/><br/>
 
<input type="submit" value="oblicz">




 

 
<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$del = ($b ** 2 - 4 * $a * $c);

if ($del > 0) {
    $x1 = (-$b + sqrt($del)) / (2 * $a);
    $x2 = (-$b - sqrt($del)) / (2 * $a);
    $wynik = "Delta = $del, X1 = $x1, X2 = $x2";
} elseif ($del == 0) {
    $x = (-$b / (2 * $a));
    $wynik = "Delta = $del, X = $x";
} else {
    $wynik = "Delta = $del, Pierwiastki są liczbami zespolonymi.";
}

echo $wynik;
?>

</body>
</html>