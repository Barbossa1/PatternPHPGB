<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16]; //11

function search($arr)
{
    $sum = 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10 + 11 + 12 + 13 + 14 + 15 + 16;
    $arrSum = array_sum($arr);
    $num = $sum - $arrSum;
    return $num;
}

echo search($arr);