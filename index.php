<?php

require_once('database.php');

try {
    $results = $pdo->prepare("select * from film");
    $results->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$films = $results->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>PHP Data Objects</title>
    <link rel="stylesheet" href="style.css">

</head>

<body id="home">

<h1>Sakila Sample Database</h1>

<h2>Films by Title</h2>
<p class="color"><a href="insert.php">New film? You can add it here!</a></p>

<ol>
    <?php
    foreach($films as $film) {
        echo
            '<li><i class="lens"></i><a href="films.php?id='.$film["film_id"].'">'.$film["title"].'</li>';

    }
    ?>

</ol>

</body>

</html>



