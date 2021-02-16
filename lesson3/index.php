<?php
//===Магические числа===
const x = 5;
const y = 5;
const c = 25;

function sum($x,$y)
{
    $c = $x + $y;
    return $c;
}

//===Божественный объект===
class general
{
    public $work;
    public $run;
    public $fly;

    public function human($work)
    {}

    public function bird($fly)
    {}

    public function bolton($run)
    {}
}

//===Golden hammer===
function doAll($a,$b,$str,$arr)
{
    if ($a && $b) {
        $c = $a + $b;
        return $c;
    } elseif ($str) {
        echo $str;
    } elseif ($arr) {
        foreach ($arr as $item) {
            echo $item;
        }
    }
}