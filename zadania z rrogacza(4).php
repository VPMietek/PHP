<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź liczbę</title>
</head>
<body>

    <h2>Sprawdź czy liczba jest większa, mniejsza lub równa zero</h2>

    <form method="GET" action="">
        <label for="liczba">Wprowadź liczbę:</label>
        <input type="number" name="liczba" id="liczba" required>
        <button type="submit" name="sprawdz">Sprawdź</button>
    </form>

    <?php
    if (isset($_GET['sprawdz'])) {
        $liczba = $_GET['liczba'];

        
        if ($liczba > 0) {
            echo "<p>Liczba $liczba jest większa od zera.</p>";
        } elseif ($liczba < 0) {
            echo "<p>Liczba $liczba jest mniejsza od zera.</p>";
        } else {
            echo "<p>Liczba $liczba jest równa zero.</p>";
        }
    }
    ?>

</body>
</html>
