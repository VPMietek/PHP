<?php
$text = "To jest przykładowy tekst,\nzawierający nową linię.";
$convertedText = nl2br($text);

echo "Oryginalny tekst:<br>";
echo $text; // Wyświetlenie oryginalnego tekstu
echo "<br><br>";
echo "Tekst po konwersji:<br>";
echo $convertedText; // Wyświetlenie tekstu po konwersji


?>