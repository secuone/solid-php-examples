<?php

final class Square extends Shape
{
    protected $sideLength;

    public function __construct($sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function getArea()
    {
        return $this->sideLength * $this->sideLength;
    }
}
