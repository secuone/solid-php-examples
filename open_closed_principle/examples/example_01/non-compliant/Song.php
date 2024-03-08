<?php 

final class Song
{
    private $totalLength;
    private $sentLength;

    public function getSentLengthPercentage() {
        return $this->sentLength * 100 / $this->totalLength;
    }
}
