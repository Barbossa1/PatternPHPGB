<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$text = new Text();
$copy = new CopyCommand($text);
$copy->execute();

$cut = new CutCommand($text);
$cut->execute();

$past = new PastCommand($text);
$past->execute();
