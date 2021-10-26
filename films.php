<?php

require_once('database.php');

if (!empty($_GET['id'])){
    $film_id = intval($_GET['id']);

    try {
        $results = $pdo->prepare('select * from film where film_id = ?');
        $results->bindParam(1, $film_id);
        $results->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
}

$film = $results->fetch(PDO::FETCH_ASSOC);
if($film == FALSE){
    echo 'Sorry, a film could not be found with the provided ID.';
    die();
}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>PHP Data Objects</title>
    <link rel="stylesheet" href="style.css">

</head>

<body id="home">

<h1 class="Sakila">Movie</h1>

<h2>
    <?php
    echo $film['title'];
    ?>
</h2>

<h1>Description</h1>
<h2>
    <?php echo $film['description']; ?>
</h2>


<h1>Duration</h1>
<h2>
    <?php echo "The duration in minutes of this Film is: " . $film['length']; ?>
</h2>

<h1>Rating, Special features and Release Year</h1>
<h2>
    <?php echo "This Film has a rating of:  " . $film['rating'];
    echo "<br>";
    echo "Special Features:  " . $film['special_features'];
    echo "</br>";
    echo $film['release_year'];

    ?>
</h2>

<p class="color"><a href="index.php">Take me back Home</a></p>

<body>
</body>

</html>



