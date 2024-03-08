<?php

class Dog implements Animal
{
    public function fly()
    {
        throw new Exception("I can't fly");
    }

    public function run()
    {
        echo "Dog is running";
    }

    public function bark()
    {
        echo "Dog is barking";
    }
}
