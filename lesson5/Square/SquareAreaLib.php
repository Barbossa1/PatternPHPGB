<?php

namespace Square;

class SquareAreaLib implements IAdaptee
{
    public function getSquareArea($diagonal)
    {
        $area = ($diagonal**2)/4;
        return $area;
    }
}