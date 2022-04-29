<?php

class Movie {

    //Variabili d'istanza:
    public $title;
    public $genre;
    public $year;
    public $duration;
    public $poster;
    public $originalLanguage;
    public $originalTitle;
    public $country;
    public $filmCompany;
    public $mainCast = [];
    public $director;
    public $rating;
    public $description;

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie  PHP OOP</title>
</head>
<body>
<?php
        echo ("<h1>" . 'Titolo:' . $AvengersEndgame->title . "</h1>");
        echo ("<h2>" . 'Genere:' . $AvengersEndgame->genre . "</h2>");
        echo ("<h3>" . 'Anno di produzione:' . $AvengersEndgame->year . "</h3>");
        echo ("<h4>" . 'Regia di:' . $AvengersEndgame->director . "</h4>");

        echo("<h4>" . 'Cast principale:');
        echo("<ul>");
        foreach($AvengersEndgame->mainCast as $actor) {
            echo ("<li>" . $actor . "</li>");
        };
        echo ("</ul>");
        echo ("</div>");

?>










</body>
</html>