<?php 

final class File
{
    private $totalLength;
    private $sentLength;

    public function getSentLengthPercentage() {
        return $this->sentLength * 100 / $this->totalLength;
    }
}
