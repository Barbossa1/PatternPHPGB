<?php

$arr = [1, 2, 3, 4, 5, 5, 6, 7, 8, 9];

print_r(binary($arr));

function binary($arr)
{
    foreach (array_count_values($arr) as $key => $value) {
        if ($value > 1) {
            $result[] = array_fill(0, $value, $key);
            return $result;
        }
    }
}