<?php

require_once __DIR__."/classes/Movie.php";

$harry_potter = new Movie('Harry pottere e i doni della morte', 2012, "Fantasy", 180, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.");
$harry_potter->setAdult(false);

$cinquanta_grigio = new Movie("Cinquanta sfumature di grigio", 2010, "Erotico", 150, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.');
$cinquanta_grigio->setAdult(true);

var_dump($harry_potter, $cinquanta_grigio);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $harry_potter->titolo ?></h2>
    <span>anno: <?php echo $harry_potter->anno ?></span>
    <br>
    <span>genere: <?php echo $harry_potter->genere ?></span>
    <br>
    <span>durata: <?php echo $harry_potter->durata ?> min.</span>
    <p><?php echo $harry_potter->trama ?></p>
    <span><?php echo $harry_potter->getAdult() ?></span>

    <hr>

    <h2><?php echo $cinquanta_grigio->titolo ?></h2>
    <span>anno: <?php echo $cinquanta_grigio->anno ?></span>
    <br>
    <span>genere: <?php echo $cinquanta_grigio->genere ?></span>
    <br>
    <span>durata: <?php echo $cinquanta_grigio->durata ?> min.</span>
    <p><?php echo $cinquanta_grigio->trama ?></p>
    <span><?php echo $cinquanta_grigio->getAdult() ?></span>
</body>
</html>
