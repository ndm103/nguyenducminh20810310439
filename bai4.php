<?php

function isPrimeNumber($n) {
    if ($n < 2) {
        return false;
    }
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
$n = 100;
echo ("Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
if ($n >= 2) {
    echo "2";
}
for ($i = 3; $i < $n; $i+=2) {
    if (isPrimeNumber($i)) {
        echo (" " . $i);
    }
}
?>