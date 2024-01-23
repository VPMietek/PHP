<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie </title>
</head>
<body>
 
Figury
 
<br/>
<br/>


</form>
Trapex
<form action="" method="GET">
    A = <input type = "number" id = "a" name="a"> <br/>
    B = <input type = "number" id = "b" name="b"> <br/>
    H = <input type = "number" id = "h" name="h"> <br/>
    <input type="submit" value="Oblicz Pole trapezu">
</form>
Trójkąt
<form action="" method="GET">
C = <input type = "number" id = "c" name="c"> <br/>
D = <input type = "number" id = "d" name="d"> <br/>
<input type="submit" value="Oblicz Pole trójkąta">
</form>
Prostokąt
<form action="" method="GET">
F = <input type = "number" id = "f" name="f"> <br/>
G = <input type = "number" id = "g" name="g"> <br/>
<input type="submit" value="Oblicz Pole prostokąta">
</form>

 

 
 <?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['h'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $h = $_GET['h'];
    echo "Pole trapezu: " . (($a + $b) / 2) * $h;
    }
        if(isset($_GET['c']) && isset($_GET['d'])){
            $c = $_GET['c'];
            $d = $_GET['d'];
            echo "Pole trójkąta: " . ($c * $d) / 2;
            }
                if(isset($_GET['f']) && isset($_GET['g'])) {
                    $f = $_GET['f'];
                    $g = $_GET['g'];
                echo "Pole prostokąta: " . $f * $g;
                }
?>

</body>
</html>