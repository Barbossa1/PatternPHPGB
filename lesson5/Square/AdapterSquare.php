<?php

namespace Square;

class AdapterSquare implements ISquare
{
    protected $adaptee = null;

    public function  __construct()
    {
        $this->adaptee = new SquareAreaLib();
    }
    public function squareArea($sideSquare)
    {
        return $this->adaptee->getSquareArea($sideSquare);
    }
}