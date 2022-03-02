<?php

class Movie
{
   public $title;
   public $genre;
   public $director;
   public $plot;

   function __construct($title, $genre, $director, $plot)
   {
      $this->title= $title;
      $this->genre= $genre;
      $this->director= $director;
      $this->plot= $plot;

   }

   public function printedElement($element){
      return $element;
   }
}

