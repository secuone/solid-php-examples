<?php

class Dog implements Runnable, Barkable
{
    public function run()
    {
        echo "Dog is running";
    }

    public function bark()
    {
        echo "Dog is barking";
    }
}
