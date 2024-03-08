<?php 

final class Rhea extends Bird
{
    function tweet()
    {
        return 'Rheeeeeeaaa';
    }

    function fly()
    {
        throw New Exception("I can't fly");
    }
}
