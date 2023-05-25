<?php
function sum($stn1, $stn2)
{
    $result = "";
    $carry = 0;
    for ($i = strlen($stn1) - 1, $j = strlen($stn2) - 1; $i >= 0 || $j >= 0 || $carry > 0; $i--, $j--) {
        $digit1 = ($i >= 0) ? intval($stn1[$i]) : 0;
        $digit2 = ($j >= 0) ? intval($stn2[$j]) : 0;

        $sum = $digit1 + $digit2 + $carry;
        $carry = intval($sum / 10);
        $digit = $sum % 10;
        $result = strval($digit);
    }

    return $result;
}

$stn1 = "1234";
$stn2 = "897";
$result = sum($stn1, $stn2);
echo "Result: " . $result;
