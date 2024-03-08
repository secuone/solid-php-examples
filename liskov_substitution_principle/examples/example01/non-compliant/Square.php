<?php

final class Square extends Rectangle
{
    function __construct($lengthAndWidth)
    {
        parent::__construct($lengthAndWidth, $lengthAndWidth);
    }

    public function setLength($length)
    {
        parent::setLength($length);
        parent::setWidth($length);
    }

    public function setWidth($width)
    {
        parent::setLength($width);
        parent::setWidth($width);
    }
}
