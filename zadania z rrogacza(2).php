<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź podzielność</title>
</head>
<body>

    <h2>Sprawdź czy pierwsza liczba jest podzielna przez drugą</h2>

    <form method="GET" action="">
        <label for="liczba1">Wprowadź pierwszą liczbę:</label>
        <input type="number" name="liczba1" id="liczba1" >

        <label for="liczba2">Wprowadź drugą liczbę:</label>
        <input type="number" name="liczba2" id="liczba2" >

        <button type="submit" name="sprawdz">Sprawdź</button>
    </form>

    <?php
    if (isset($_GET['sprawdz'])) {
        $liczba1 = $_GET['liczba1'];
        $liczba2 = $_GET['liczba2'];

        
        if ($liczba2 != 0 && $liczba1 % $liczba2 == 0) {
            echo "<p>Liczba $liczba1 jest podzielna przez $liczba2.</p>";
        } else {
            echo "<p>Liczba $liczba1 nie jest podzielna przez $liczba2.</p>";
        }
    }
    ?>

</body>
</html>
