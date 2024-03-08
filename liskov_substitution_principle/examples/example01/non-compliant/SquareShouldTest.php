<?php

final class SquareShouldTest
{
    public function not_respect_the_liskov_substitution_principle_breaking_the_rectangle_laws_while_modifying_its_length()
    {
        $squareLengthAndWidth = 2;
        $square = new Square($squareLengthAndWidth);

        $newSquareLength = 4;
        $square->setLength($newSquareLength);

        $expectedAreaTakingIntoAccountRectangleLaws = 8;

        if ($expectedAreaTakingIntoAccountRectangleLaws === $square->getArea()) {
            echo "The test passed.";
        } else {
            echo "The test failed.";
        }
    }
}
