<?php
function bmi($masa, $wzrost) {
    $bmi = $masa / ($wzrost * $wzrost);
    
    if ($bmi < 18.5) {
        return "Niedowaga";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return "Prawidłowa masa ciała";
    } elseif ($bmi >= 24.9 && $bmi < 29.9) {
        return "Nadwaga";
    } elseif ($bmi >= 29.9 && $bmi < 34.9) {
        return "I stopień otyłości";
    } elseif ($bmi >= 34.9 && $bmi < 39.9) {
        return "II stopień otyłości";
    } else {
        return "Otyłość skrajna";
    }
}


$masa = 75; 
$wzrost = 1.75; 
$kategoria_bmi = bmi($masa, $wzrost);
echo "Wskaźnik masy ciała (BMI): " . $kategoria_bmi; 
?>