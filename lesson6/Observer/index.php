<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$work = new Work();
$work->attach(new Php);
$work->attach(new Java);
$work->save();


