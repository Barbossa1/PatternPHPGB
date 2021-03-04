<?php

class QiwiStrategy implements ISort
{
    public function pay(array $money)
    {
        echo "Оплата через Qiwi!".PHP_EOL;
    }
}