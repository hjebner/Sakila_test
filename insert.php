<?php
require_once('database.php');
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

    <?php

//    if(isset($_POST['submit'])) {
//        $title = $_POST['title'];
//        $description = $_POST['description'];
//        $language_id = $_POST['language_id'];
//        $release_year = $_POST['release_year'];
//        $original_language_id = $_POST['original_language_id'];
//        $rental_duration = $_POST['rental_duration'];
//        $rental_rate = $_POST['rental_rate'];
//        $length = $_POST['length'];
//        $rating = $_POST['rating'];
//        $special_features = $_POST['special_features'];
//
//        ///////// Fin informacion enviada por el formulario ///
//
//        ////////////// Insertar a la tabla la informacion generada /////////
//        $sql = "insert into film (title, desciption, language_id, release_year, original_language_id, rental_duration, rental_rate, length, rating, special_features)
//            values(:title, :desciption, :language_id, :release_year, :original_language_id, :rental_duration, :rental_rate, :length, :rating, :special_features)";
//
//        $sql = $connect->prepare($sql);
//
//        $sql->bindParam(':title', $title, PDO::PARAM_STR);
//        $sql->bindParam(':description', $description, PDO::PARAM_STR);
//        $sql->bindParam(':language_id', $language_id, PDO::PARAM_STR);
//        $sql->bindParam(':release_year', $release_year, PDO::PARAM_STR);
//        $sql->bindParam(':original_language_id', $original_language_id, PDO::PARAM_STR);
//        $sql->bindParam(':rental_duration', $rental_duration, PDO::PARAM_STR);
//        $sql->bindParam(':rental_rate', $rental_rate, PDO::PARAM_STR);
//        $sql->bindParam(':length', $length, PDO::PARAM_STR);
//        $sql->bindParam(':rating', $rating, PDO::PARAM_STR);
//        $sql->bindParam(':special_features', $special_features, PDO::PARAM_STR);
//
//        $sql->execute();
//    }


        if (!isset($_POST['submit'])) {

        try {
//
        $newPDO = new PDO($dsn, $user, $password);
        $newPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO film (title, description, language_id, release_year, original_language_id, rental_duration, rental_rate, length, rating, special_features)
        VALUES ('title', 'description', 'language_id', 'release_year', 'original_language_id', 'rental_duration', 'rental_rate', 'length', 'rating', 'special_features')";
//            VALUES (':title', ':description', ':language_id', ':release_year', ':original_language_id', ':rental_duration', ':rental_rate', ':length', ':rating', ':special_features')";
        echo "New record created successfully";
        var_dump($_REQUEST);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    }

    ?>

    <form action="" method="post">
        <div>
            <label for="title">New Film Title</label>
            <input type="text" name="title" required><br>

            <label for="description">Description</label>
            <input type="text" name="description" required><br>

            <label for="release_year">Release Year</label>
            <input type="text" name="release_year" required><br>

            <label for="language_id">Language</label>
            <input type="text" name="language_id" required><br>

            <label for="original_language_id">Original Language</label>
            <input type="text" name="original_language_id" required><br>

            <label for="rental_duration">Rental Duration</label>
            <input type="text" name="rental_duration" required><br>

            <label for="rental_rate">Rental Rate</label>
            <input type="text" name="rental_rate" required><br>

            <label for="length">Length</label>
            <input type="text" name="length" required><br>

            <label for="rating">Rating</label>
            <input type="text" name="rating" required><br>

            <label for="special_features">Special Features</label>
            <input type="text" name="special_features" required><br>


            <input class="Submit" type="submit" value="Submit">

        </div>
    </form>
</body>

</html>