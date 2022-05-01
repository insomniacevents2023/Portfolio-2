<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "blockbuster";
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        if ($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function movieTable() {
        global $connection;

        if ($connection != null) {
            $results = mysqli_query($connection, "SELECT `movie_name`, `director_lastname`, `director_firstname`, `genre` FROM `stock`;");
            echo("<table width='600' border='1px solid'><tbody>");
            echo("<tr><th>Movie Name</th><th>Director Last Name</th><th>Director First Name</th><th>Genre</th></tr>");
            while($row = mysqli_fetch_assoc($results)) {
                echo("<tr>");
                echo("<td>".$row['movie_name']."</td>");
                echo("<td>".$row['director_lastname']."</td>");
                echo("<td>".$row['director_firstname']."</td>");
                echo("<td>".$row['genre']."</td>");
                echo("</tr>");
            }
            echo("</tbody></table>");
        }
    }

    function returnMovie() {
        global $connection;
        if (isset($_POST["movie_id"]) &&
            isset($_POST["movie_name"]) &&
            isset($_POST["director_lastname"]) &&
            isset($_POST["director_firstname"]) &&
            isset($_POST["genre"])) {
                $movieName = htmlspecialchars($_POST["movie_name"]);
                $director_lastName = htmlspecialchars($_POST["director_lastname"]);
                $director_firstName = htmlspecialchars($_POST["director_firstname"]);
                $genre = htmlspecialchars($_POST["genre"]);
                $movieId = intval($_POST["movie_id"]);
                if($connection != null) {
                    $results = mysqli_query($connection, "INSERT INTO stock (movie_id, movie_name, director_lastname, director_firstname, genre) VALUES('{$movieId}', '{$movieName}', '{director_lastName}', '{director_firstName}', '{$genre}')");
            }
        }
    }

    function deleteMovie() {
        global $connection;
        if (isset($_POST["movie_id"]) &&
            isset($_POST["movie_name"])) {
                $movie_id = intval($_POST["movie_id"]);
                $movie_name = htmlspecialchars($_POST["movie_name"]);
                if($connection != null) {
                    $delete = "DELETE FROM stock WHERE movie_name = '{$movie_name}'";
                    mysqli_query($connection, $delete);
                }
            }
    }

    function close() {
        global $connection;

        if ($connection != null) {
            mysqli_close($connection);
        }
    }
?>
