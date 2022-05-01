<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Block Buster Movies!</title>
    </head>
    <body>
        <h2>Are we out of a particular Movie?</h2>
        <form action="rent.php" method="POST">
            <h3>Rent a Movie:</h3>
                <dl>
                    <dt><label>MovieId:</label></dt>
                        <dd><input type="number" id="Movieid" name="Movieid"></input></dd>
                    <dt><label>MovieName:</label></dt>
                        <dd><input type="text" id="Moviename" name="Moviename"></input></dd>
                </dl>
                <dd><input type="submit"></input></dd>
        </form>
    <?php
        connect();
        MovieTable();
        rentMovie();
        close();
        echo("<br><a href='index.php'>Return to Home</a>");
    ?>
</html>
