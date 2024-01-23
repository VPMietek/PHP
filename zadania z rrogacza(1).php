<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź parzystość</title>
</head>
<body>

    <h2>Sprawdź parzystość liczby</h2>

    <form method="GET" action="">
        <label for="liczba">Wprowadź liczbę:</label>
        <input type="number" name="liczba" id="liczba">
        <button type="submit" name="sprawdz">Sprawdź</button>
    </form>

    <?php
    
    if (isset($_GET['sprawdz'])) {
        
        $liczba = $_GET['liczba'];

        
        if ($liczba % 2 == 0) {
            echo "<p>Liczba $liczba jest parzysta.</p>";
        } else {
            echo "<p>Liczba $liczba jest nieparzysta.</p>";
        }
    }
    ?>

</body>
</html>
