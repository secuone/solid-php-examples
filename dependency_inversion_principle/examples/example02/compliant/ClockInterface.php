<?php

/**
 * Interface representing a clock.
 */
interface ClockInterface
{
    public function monthDay(): DateTimeInterface;
}