<?php
//===Определить сложность алгоритмов.===
//Поиск элемента массива с известным индексом
function a()
{
    $arr = [1, 2, 3];
    array_search(0, $arr); // O(n)
}

//Дублирование одномерного массива через foreach
function b()
{
    $arr = [1, 2, 3];
    foreach ($arr as $value) { // O(n)
        echo $value;
    }
}

//Рекурсивная функция нахождения факториала числа
function c($n)
{
    return ($n < 2 ? 1 : $n * c($n - 1)); // O(n^2)
}

//Удаление элемента массива с известным индексом
function d()
{
    $arr = [1, 2, 3];
    unset($arr[0]); // O(n)
}

//===Сколько произойдет итераций?===
//a
$n = 10000;
$arr[] = [];

for ($i = 0; $i < $n; $i++) { // $i == 10000
    for ($j = 0; $j < $n; $j *= 2) { // $i == 13
        $arr[$i][$j] = true;
    }
}
//b
$n = 10000;
$arr[] = [];

for ($i = 0; $i < $n; $i += 2) { //$i == 5000
    for ($j = 0; $j < $n; $j++) { //j == 10000
        $arr[$i][$j] = true;
    }
}
//c
$n = 10000;
$arr[] = [];
foo($n);
function foo($n)
{
    while ($n > 0) { //$n == 10000
        for ($j = 0; $j < $n; $j++) { //$j == 10000
            $n--;
            foo($n);
        }
    }
}