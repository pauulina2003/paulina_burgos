<?php
function digitsOf($i)
{
    return $i !== 0 ? floor(log10($i) + 1) : 1;
}

function longestNumber($x)
{
    $longest = 0;
    foreach ($x as $row) {
        foreach ($row as $item) {
            $digits = digitsOf($item);
            if ($digits > $longest) $longest = $digits;
        }
    }
    return $longest;
}

function calculaCaracters($x, $longest)
{
    $n = count($x);
    return 2 + $longest * $n + $n - 1;
}

function printHeader($lineLength)
{
    echo "--";
    echo str_repeat(" ", $lineLength - 4);
    echo "--\n";
}

function imprimeixMatriu($M)
{
    $longest = longestNumber($M);
    $lineLength = calculaCaracters($M, $longest);
    printHeader($lineLength);
    foreach ($M as $row) {
        echo "|";
        for ($i = 0; $i < count($row); $i++) {
            echo str_pad($row[$i], $longest, "0", STR_PAD_LEFT);
            if ($i != count($row) - 1) echo ",";
        }
        echo "|\n";
    }
    printHeader($lineLength);
}

function sumaMatrius($M1, $M2)
{
    $out = $M1;
    for ($i = 0; $i < count($out); $i++) {
        for ($j = 0; $j < count($out[$i]); $j++) {
            $out[$i][$j] = $M1[$i][$j] + $M2[$i][$j];
        }
    }
    return $out;
}

function multMatrius($mult1, $mult2)
{
    $out = $mult1;
    $length = count($mult1);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            $out[$i][$j] = 0;
            for ($k = 0; $k < $length; $k++)
                $out[$i][$j] += $mult1[$i][$k] * $mult2[$k][$j];
        }
    }
    return $out;
}

$m1 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$m2 = [[11, 12, 13], [14, 15, 16], [17, 18, 19]];
imprimeixMatriu($m1);
imprimeixMatriu(sumaMatrius($m1, $m2));
imprimeixMatriu(multMatrius($m1, $m2));
?>
