<?php

/**
 * Class representing a clock that provides the current date.
 */
final class SystemClock implements ClockInterface
{
    public function monthDay(): DateTimeInterface
    {
        return new DateTime('today');
    }
}