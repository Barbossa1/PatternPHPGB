<?php

class WebmoneyStrategy implements ISort
{
    public function pay(array $money)
    {
        echo "Оплата через WebMoney!".PHP_EOL;
    }
}