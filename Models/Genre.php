<?php

class Genre
{
    public $genre;

    public function __construct($genre)
    {
        $this->genre = $genre;
    }

    public function printgenre(): string
    {
        return "<span>$this->genre</span>";
    }
}