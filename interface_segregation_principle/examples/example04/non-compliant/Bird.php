<?php

class Bird implements Animal
{
    public function bark()
    {
        throw new Exception("I can't bark");
    }

    public function run()
    {
        echo "Bird is running";
    }
    
    public function fly()
    {
        echo "Bird is flying";
    }
}