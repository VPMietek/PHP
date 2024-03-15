<?php
$pdane = fopen("dane.txt","r");
readfile("dane.txt");
echo "<br/>"; echo "<br/>";
$tekst = file('dane.txt');
print_r($tekst);
echo "<br/>"; echo "<br/>";
$tekst = file_get_contents('dane.txt');
echo nl2br($tekst);
echo "<br/>"; echo "<br/>";
$pwynik = fopen("wynik.txt","w");
fwrite($pwynik,"START <br/> nowy wiersz");
fclose($pdane);
fclose($pwynik);
?>
