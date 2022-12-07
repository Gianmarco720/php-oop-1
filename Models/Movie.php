<?php
class Movie
{
    public $name;
    public $genre;
    public $year;
    public $movieLength;

    function __construct($name, $genre, $year, $movieLength)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->movieLength = $movieLength;
    }

    function get_movies()
    {

        return 'Title: ' . $this->name . '<br>' .
            'Genre: ' . $this->genre . '<br>' .
            'Year: ' . $this->year . '<br>' .
            'Duration: ' . $this->movieLength . '<br>';
    }
}
