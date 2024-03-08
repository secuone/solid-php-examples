<?php

class Rectangle {
    
    private $length;      
    private $width;

    function __construct($length, $width)
    {  
        $this->length = $length;
        $this->width = $width;
    }

    function setLength($length)
    {
        $this->length = $length;
    }

    function setWidth($width)
    {
        $this->width = $width;
    }

    function getArea()
    {
        return $this->length * $this->width;
    }
}
