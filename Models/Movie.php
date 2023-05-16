<?php
class Movie
{
    private int $id;
    public string $title;
    public string $original_title;
    public string $nationality;
    public string $date;
    public float $vote;
    public string $image;

   public function __construct(string $title, string $original_title, string $nationality, string $date, float $vote, string $image)
   {
    $this->title = $title;
    $this->original_title = $original_title;
    $this->nationality = $nationality;
    $this->date = $date;
    $this->vote = $vote;
    $this->image = $image;
   }

   public function setId(int $id)
   {
    $this->id = $id;
   }
   public function getId()
   {
    return $this->id;
   }

}