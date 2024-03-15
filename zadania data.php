<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Zadanie 1
    <?php
    $miesiace = array(
        '01' => 'stycznia',
        '02' => 'lutego',
        '03' => 'marca',
        '04' => 'kwietnia',
        '05' => 'maja',
        '06' => 'czerwca',
        '07' => 'lipieca',
        '08' => 'sierpnia',
        '09' => 'września',
        '10' => 'października',
        '11' => 'listopada',
        '12' => 'grudnia'
    );
    $dzientygodnia = array(
    'Monday'    => 'poniedziałek',
    'Tuesday'   => 'wtorek',
    'Wednesday' => 'środa',
    'Thursday'  => 'czwartek',
    'Friday'    => 'piątek',
    'Saturday'  => 'sobota',
    'Sunday'    => 'niedziela'
    );
    $dzientygodniawersjaANG = date("l");
    $dzientygodniawersjaPL = $dzientygodnia[$dzientygodniawersjaANG];
    echo "Dziś jest " . $dzientygodniawersjaPL. "<br>";
    
    $miesiacNumer = date("m");
    $miesiacNazwaPL = $miesiace[$miesiacNumer];

    echo date("d/m/y") . "<br>";
    echo date("m-d-y") . "<br>";
    echo date("Y-m-d") . "<br>";
    echo date("H:i:s") . "<br>";
    echo date("h:i:s A") . "<br>";
    echo "Pełna data: " . $dzientygodniawersjaPL . ", " . date("d") . " " . $miesiacNazwaPL . " " . date("Y") . "<br>";
    ?>
</body>
</html>
