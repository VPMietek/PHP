<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Funkcja date()</title>
</head>
<body>
<?php
    
    function pytania()
    {
        return array(
            1 => array(
                'pytanie' => 'Jak wyświetlić obecną datę w formacie "dzień-miesiąc-rok"?',
                'odpowiedzi' => array(
                    'A' => 'date("m-d-y")',
                    'B' => 'date("d/m/y")',
                    'C' => 'date("Y-m-d")',
                    'D' => 'date("l jS \of F Y h:i:s A")'
                ),
                'poprawna_odpowiedz' => 'B'
            ),
            2 => array(
                'pytanie' => 'Jak wyświetlić obecną godzinę w formacie 24-godzinnym?',
                'odpowiedzi' => array(
                    'A' => 'date("h:i:s A")',
                    'B' => 'date("H:i:s")',
                    'C' => 'date("Y-m-d")',
                    'D' => 'date("l jS \of F Y h:i:s A")'
                ),
                'poprawna_odpowiedz' => 'B'
            ),
            3 => array(
                'pytanie' => 'Jak wyświetlić obecną nazwę dnia tygodnia po polsku?',
                'odpowiedzi' => array(
                    'A' => 'date("l")',
                    'B' => 'strftime("%A")',
                    'C' => 'date("D")',
                    'D' => 'strftime("%B")'
                ),
                'poprawna_odpowiedz' => 'B'
            ),
            4 => array(
                'pytanie' => 'Jak wyświetlić pełną datę i czas w formacie ISO-8601?',
                'odpowiedzi' => array(
                    'A' => 'date(DATE_ISO8601)',
                    'B' => 'date("l jS \of F Y h:i:s A")',
                    'C' => 'date("Y-m-d")',
                    'D' => 'strftime("%A")'
                ),
                'poprawna_odpowiedz' => 'A'
            )
        );
    }
    
    function wynik($odpowiedzi, $pytania)
    {
        $pkt = 0;
        foreach ($pytania as $nr => $pytanie) {
            if ($odpowiedzi['pytanie' . $nr] === $pytanie['poprawna_odpowiedz']) {
                $pkt++;
            }
        }
        return $pkt;
    }
    
   
    ?>
</body>
</html>
