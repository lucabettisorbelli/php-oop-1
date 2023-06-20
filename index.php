<?php

class Movie
{
    public $title;
    public $director;
    public $year;

    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function getInfo()
    {
        return "Titolo: " . $this->title . ", Regista: " . $this->director . ", Anno: " . $this->year;
    }
}

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972);
$movie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994);

echo $movie1->getInfo() . '<br>';
echo $movie2->getInfo();
