<?php
function task3($n)
{
    $i = 2;
    while ($i * $i < $n) {
        while ($n % $i == 0) {
            $n = $n / $i;
        }
        $i = $i + 1;
    }
    return $n;
}

$res3 = task3(600851475143);
echo $res3;