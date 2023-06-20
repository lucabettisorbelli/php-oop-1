<?php

class Genre
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Movie
{
    public $title;
    public $director;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = array();

        foreach ($genres as $genre) {
            if ($genre instanceof Genre) {
                array_push($this->genres, $genre);
            }
        }
    }

    public function getInfo()
    {
        $genres = array();
        foreach ($this->genres as $genre) {
            array_push($genres, $genre->name);
        }

        return "Titolo: " . $this->title . ", Regista: " . $this->director . ", Anno: " . $this->year . ", Generi: " . implode(", ", $genres);
    }
}

$genre1 = new Genre("Drammatico");
$genre2 = new Genre("Gangster");
$genre3 = new Genre("Thriller");
$genre4 = new Genre("Noir");

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, [$genre1, $genre2]);
$movie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [$genre3, $genre4]);

echo $movie1->getInfo() . '<br>';
echo $movie2->getInfo();
