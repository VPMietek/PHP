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
    a = <input type = "number" id = "a" name="a"> <br/>
    b = <input type = "number" id = "b" name="b"> <br/>
    c = <input type = "number" id = "c" name="c"> <br/><br/>
 
<input type="submit" value="oblicz">

</form>
<form action="" method="GET">
    U = <input type = "number" id = "u" name="u"> <br/>
    I = <input type = "number" id = "i" name="i"> <br/>
    <input type="submit" value="oblicz opór">
</form>
<form action="" method="GET">
    U = <input type = "number" id = "u" name="u"> <br/>
    I = <input type = "number" id = "i" name="i"> <br/>
    <input type="submit" value="oblicz opór">
</form>

 

 
 <?php
 if (isset($_GET ['a']) &&isset($_GET['b']) &&isset($_GET['c'])){
    if(empty($_GET ['a']) &&empty($_GET['b']) &&empty($_GET['c'])){
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
echo "<br>$a + $b + $c=".($a+$b+$c);

 }}
$u=$_GET['u'];
$i=$_GET['i'];
echo "<br>R = $u / $i=".round($u/$i, 2)."Ω";
//echo round ($a/$b,6)
?>

</body>
</html>