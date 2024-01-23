<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź przedział</title>
</head>
<body>

    <h2>Sprawdź czy liczba należy do przedziału <1,10> lub <17,21></h2>

    <form method="GET" action="">
        <label for="liczba">Wprowadź liczbę:</label>
        <input type="number" name="liczba" id="liczba" required>
        <button type="submit" name="sprawdz">Sprawdź</button>
    </form>

    <?php
    if (isset($_GET['sprawdz'])) {
        $liczba = $_GET['liczba'];

        
        if (($liczba >= 1 && $liczba <= 10) || ($liczba >= 17 && $liczba <= 21)) {
            echo "<p>Liczba $liczba należy do przedziału <1,10> lub <17,21>.</p>";
        } else {
            echo "<p>Liczba $liczba nie należy do przedziału <1,10> ani <17,21>.</p>";
        }
    }
    ?>

</body>
</html>
