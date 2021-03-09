<?php
//===Баланс скобок===
$exp1 = "{[][()]}";
$exp2 = "{[[(]}";

function brackets($exp)
{
//    $stack = new SplStack();
    $stack = [];

    for ($i = 1; $i < strlen($exp); $i++) {
        if ($exp[$i] == "[" || $exp[$i] == "{" || $exp[$i] == "(") {
//            $stack->push($exp[$i]);
            array_push($stack, $exp[$i]);
        } elseif ($exp[$i] == "]" || $exp[$i] == "}" || $exp[$i] == ")") {
//            $stack->pop();
            array_pop($stack);
        }
    }

    if (count($stack) == 0) {
        return 1;
    } else {
        return 0;
    }

//    if ($stack->count() == 0) {
//        return 1;
//    } else {
//        return 0;
//    }
}

echo brackets($exp1);