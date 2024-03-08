<?php

final class Book
{
    public function getTitle(): string
    {
        return "A great book";
    }

    public function getAuthor(): string
    {
        return "John Doe";
    }

    public function printCurrentPage(): string
    { 
        return "current page content";
    }
}

