<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Block Buster Movies!</title>
    </head>
    <body>
    <h2>Current Movie Inventory</h2>
    <form action="index.php" method="POST">
        <h3>Return a Movie to Our Inventory:</h3>
        <dl>
            <dt><label>Movie ID:</label></dt>
                <dd><input type="number" id="movie_id" name="movie_id"></input></dd>
            <dt><label>Movie Name:</label><dt> 
                <dd><input type="text" id="movie_name" name="movie_name"></input></dd>
            <dt><label>Director Last Name:</label><dt>  
                <dd><input type="text" id="director_lastname" name="director_lastname"></input></dd>
            <dt><label>Director First Name:</label><dt>  
                <dd><input type="text" id="director_firstname" name="director_firstname"></input></dd>
            <dt><label>Genre:</label><dt>
                <dd><input type="text" id="genre" name="genre"></input></dd>
        </dl>
            <dd><input type="submit"></input></dd>
    </form>
    <?php
        connect();
        movieTable();
        addMovie();
        close();
        echo("<br><a href='delete.php'>Rent a movie from our inventory</a>");
    ?>
</html>
