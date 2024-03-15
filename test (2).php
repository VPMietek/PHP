<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Funkcja date()</title>
</head>
<body>
    <h1>Test - Funkcja date()</h1>
    <form action="wynik.php" method="post">
        <p>Pytanie 1: Jak wyświetlić obecną datę w formacie "dzień-miesiąc-rok"?<br>
            <input type="radio" name="pytanie1" value="A"> date("m-d-y")<br>
            <input type="radio" name="pytanie1" value="B"> date("d/m/y")<br>
            <input type="radio" name="pytanie1" value="C"> date("Y-m-d")<br>
            <input type="radio" name="pytanie1" value="D"> date("l jS \of F Y h:i:s A")<br>
        </p>
        <p>Pytanie 2: Jak wyświetlić obecną godzinę w formacie 24-godzinnym?<br>
            <input type="radio" name="pytanie2" value="A"> date("h:i:s A")<br>
            <input type="radio" name="pytanie2" value="B"> date("H:i:s")<br>
            <input type="radio" name="pytanie2" value="C"> date("Y-m-d")<br>
            <input type="radio" name="pytanie2" value="D"> date("l jS \of F Y h:i:s A")<br>
        </p>
        <p>Pytanie 3: Jak wyświetlić obecną nazwę dnia tygodnia po polsku?<br>
            <input type="radio" name="pytanie3" value="A"> date("l")<br>
            <input type="radio" name="pytanie3" value="B"> strftime("%A")<br>
            <input type="radio" name="pytanie3" value="C"> date("D")<br>
            <input type="radio" name="pytanie3" value="D"> strftime("%B")<br>
        </p>
        <p>Pytanie 4: Jak wyświetlić pełną datę i czas w formacie ISO-8601?<br>
            <input type="radio" name="pytanie4" value="A"> date(DATE_ISO8601)<br>
            <input type="radio" name="pytanie4" value="B"> date("l jS \of F Y h:i:s A")<br>
            <input type="radio" name="pytanie4" value="C"> date("Y-m-d")<br>
            <input type="radio" name="pytanie4" value="D"> strftime("%A")<br>
        </p>
        <input type="submit" value="Sprawdź odpowiedzi">
    </form>
</body>
</html>

</body>
</html>