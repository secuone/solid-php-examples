<?php

final class Progress
{
    public function getSentLengthPercentage(Measurable $measurable): float
    {
        return $measurable->getSentLength() * 100 / $measurable->getTotalLength();
    }
}
