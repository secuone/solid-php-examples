<?php

class Bird implements Runnable, Flyable
{
    public function run()
    {
        echo "Bird is running";
    }

    public function fly()
    {
        echo "Bird is flying";
    }
}
