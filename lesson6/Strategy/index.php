<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$money = [];

array_push($money, new Money());
array_push($money, new Money());
array_push($money, new Money());

function testStrategy(array $money) {
    $collection = new MoneyCollections($money);
    $collection->sort(new QiwiStrategy());
    $collection->sort(new WebmoneyStrategy());
    $collection->sort(new YandexStrategy());
}

testStrategy($money);