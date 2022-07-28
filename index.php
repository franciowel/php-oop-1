<?php

class Movie {
    public $title;
    public $genre;
    public $language;
    public $director;
    public $rating;
    public $year;

    public function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getRating() {
        return 'il voto di questo film è di' . ' ' . $this->rating . ' ' . 'su 10';
    }


}

$FreeGuy = new Movie('FreeGuy', 'commedy');
$FreeGuy->language = 'english';
$FreeGuy->director = 'Shawn Levy';
$FreeGuy->year = '2021';
$FreeGuy->rating = '7';

$FantozziSubisceAncora = new Movie('Fantozzi subisce ancora', 'commedy');
$FantozziSubisceAncora->language = 'italiano';
$FantozziSubisceAncora->director = 'Neri Parenti';
$FreeGuy->year = '1983';
$FantozziSubisceAncora->rating = '6';

$DeadPool = new Movie('Deadpool', 'action');
$DeadPool->language = 'english';
$DeadPool->director = 'Tim Miller';
$DeadPool->year = '1983';
$DeadPool->rating = '8';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop-1</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="mycontain">
        <div class="card">
            <h2><?php echo $FreeGuy->title; ?></h2>
            <div>Dettagli Film:
                <h3>Genere: <?php echo $FreeGuy->genre; ?></h3>
                <h3>Lingua: <?php echo $FreeGuy->language; ?></h3>
                <h4>Anno di uscita: <?php echo $FreeGuy->director; ?></h4>
                <h5><?php echo $FreeGuy->getRating(); ?></h5>
            </div>
        </div>

        <div class="card">
            <h2><?php echo $FantozziSubisceAncora->title; ?></h2>
            <div>Dettagli Film:
                <h3>Genere: <?php echo $FantozziSubisceAncora->genre; ?></h3>
                <h3>Lingua: <?php echo $FantozziSubisceAncora->language; ?></h3>
                <h4>Anno di uscita: <?php echo $FantozziSubisceAncora->director; ?></h4>
                <h5><?php echo $FantozziSubisceAncora->getRating(); ?></h5>
            </div>
        </div>

        <div class="card">
            <h2><?php echo $DeadPool->title; ?></h2>
            <div>Dettagli Film:
                <h3>Genere: <?php echo $DeadPool->genre; ?></h3>
                <h3>Lingua: <?php echo $DeadPool->language; ?></h3>
                <h4>Anno di uscita: <?php echo $DeadPool->director; ?></h4>
                <h5><?php echo $DeadPool->getRating(); ?></h5>
            </div>
        </div>

    </div>
</body>
</html>