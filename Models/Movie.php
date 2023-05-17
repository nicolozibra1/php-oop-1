<?php
include_once __DIR__ . '/Genre.php';

class Movie
{
    private int $id;
    public string $title;
    public string $original_title;
    public string $nationality;
    public string $date;
    public float $vote;
    public string $image;
    public $genre;

    public function __construct(string $title, string $original_title, string $nationality, string $date, float $vote, string $image, Genre $genre)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
        $this->genre = $genre;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getInfo(): string
    {
        return "<h3>$this->title $this->original_title $this->nationality $this->date $this->vote {$this->genre->genre}</h3>";
    }

}