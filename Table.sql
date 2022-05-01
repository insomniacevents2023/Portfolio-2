CREATE DATABASE blockbuster;

CREATE TABLE blockbuster.stock (
	movie_id INT(11),
    movie_name VARCHAR (255),
	director_lastname VARCHAR (255),
	director_firstname VARCHAR (255),
    genre VARCHAR (255),
    PRIMARY KEY(dvd_id)
);

INSERT INTO blockbuster.stock(movie_id, movie_name, director_lastname, director_firstname, genre) VALUES(0, 'Pulp Fiction', 'Tarantino', 'Quentin', 'Crime/Drama');
