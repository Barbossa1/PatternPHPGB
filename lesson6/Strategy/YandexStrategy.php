<?php

class YandexStrategy implements ISort
{
    public function pay(array $money)
    {
        echo "Оплата через Yandex!".PHP_EOL;
    }
}