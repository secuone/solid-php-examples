<?php

final class File implements Measurable
{
    private $totalLength;
    private $sentLength;
    
    public function getTotalLength(): float
    {
        return $this->totalLength;
    }
    
    public function getSentLength(): float
    {
        return $this->sentLength;
    }
}
