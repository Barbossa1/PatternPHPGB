<?php

namespace Circle;

class AdapterCircle implements ICircle
{
    protected $adaptee = null;

    public function  __construct()
    {
        $this->adaptee = new CircleAreaLib();
    }

    public function circleArea($circumference)
    {
        return $this->adaptee->getCircleArea($circumference);
    }
}