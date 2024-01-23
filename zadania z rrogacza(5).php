<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź wiek</title>
</head>
<body>

    <h2>Sprawdź kategorię wiekową</h2>

    <form method="GET" action="">
        <label for="wiek">Wprowadź wiek:</label>
        <input type="number" name="wiek" id="wiek" required>
        <button type="submit" name="sprawdz">Sprawdź</button>
    </form>

    <?php
    if (isset($_GET['sprawdz'])) {
        $wiek = $_GET['wiek'];

        
        if ($wiek < 11) {
            echo "<p>Osoba o wieku $wiek jest dzieckiem.</p>";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "<p>Osoba o wieku $wiek jest nastolatkiem.</p>";
        } elseif ($wiek > 130){
            echo "<p>Osoba o wieku $wiek nie żyje";
        } else {
            echo "<p>Osoba o wieku $wiek jest dorosła.</p>";
        }
        
    }
    ?>

</body>
</html>
