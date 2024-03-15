<!DOCTYPE html>
<html>
<head>
    <title>Księga gości</title>
</head>
<body>
    <h2>Księga gości</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nazwa">Imię:</label><br>
        <input type="text" id="nazwa" name="nazwa" required><br>
        <label for="komentaz">Twój komentarz:</label><br>
        <textarea id="komentaz" name="komentaz" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Dodaj komentarz">
    </form>
    
    <hr>
    
    <h3>Dotychczasowe komentarze:</h3>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $komentaz = $_POST['komentaz'];
        $plik = fopen("opinie.txt", "a");
        fwrite($plik, "Autor: " . $nazwa . "\n" . "Komentarz: " . $komentaz . "\n\n");
        fclose($plik);
    }
    $opinie = file("opinie.txt");

    if ($opinie) {
        foreach ($opinie as $opinia) {
            echo nl2br($opinia); 
        }
    } else {
        echo "Brak komentarzy.";
    }
    ?>
</body>
</html>
