<?php

function mergeSort($arr)
{
    if (count($arr) == 1) {
        return $arr;
    }

    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}


function merge($left, $right)
{
    $res = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0) {
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (count($right) > 0) {
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $res;
}

$arr = [8, 1, 2, 5, 6, 7];
print_r(mergeSort($arr));
echo 'Да-да, нашел в сети :) Но сам долго сидел думал и получилось +- вроде этого...';
