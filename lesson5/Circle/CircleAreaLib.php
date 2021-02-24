<?php

namespace Circle;

class CircleAreaLib implements IAdaptee
{
    public function getCircleArea($diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;
        return $area;
    }
}