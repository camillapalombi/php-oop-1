<?php

class Movie {

    //Variabili d'istanza:
    private $title;
    private $genre = [];
    private $year;
    private $duration;
    private $poster;
    private $originalLanguage;
    private $originalTitle;
    private $country;
    private $filmCompany;
    private $mainCast = [];
    private $director;
    private $rating;
    private $description;

    //Costruttore:
    function __construct($_title, $_genre, $_year, $director) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $director;
    }

    public function getCast($_actor) {
        $this->mainCast[] = $_actor;
    }

}

$AvengersEndgame = new Movie('AvengersEndgame', 'fantasy', '2019', 'Anthony & Joe Russo');
$Titanic = new Movie('Titanic', 'storico', '1997', 'James Cameron');


$AvengersEndgame->getCast('Robert Downey Jr.');
$AvengersEndgame->getCast('Chris Evans');
$AvengersEndgame->getCast('Scarlett Johansson');
$AvengersEndgame->getCast('Chris HemsWorth');
$AvengersEndgame->getCast('Tom Holland');
$AvengersEndgame->getCast('Gwyneth Paltrow');

var_dump($AvengersEndgame);

$Titanic->getCast('Leonardo DiCaprio');
$Titanic->getCast('Kate Winslet');
$Titanic->getCast('Billy Zane');
$Titanic->getCast('Kathy Bates');

var_dump($Titanic);










?>