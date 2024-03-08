<?php

/**
 * Example of class that does not follow the SRP (Single Responsibility Principle)
 * because the book has two responsibilities, one of which is to print the current page.
 */
final class Book
{
    public function getTitle()
    {
        return "A great book";
    }

    public function getAuthor()
    {
        return "John Doe";
    }

    public function printCurrentPage()
    { 
        print_r("current page content");
    }
}

