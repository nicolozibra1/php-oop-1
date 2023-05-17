<?php
include __DIR__ . '/../Models/Movie.php';

$movies= [
    $movie1 = new Movie('Il Padrino', 'The Godfather', 'en', '1972-03-24', 9.2, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', new Genre('Crime/Drama')),
    $movie2 = new Movie('Via Col Vento', 'Gone With The Wind', 'en', '1939-12-15', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg', new Genre('Drama/Romance')),
    $movie3 = new Movie('Psycho', 'Psycho', 'en', '1960-06-16', 9.4, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg', new Genre('Horror')),
    $movie4 = new Movie('Gravity', 'Gravity', 'en', '2013-08-28', 7.8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg', new Genre('Drama/Thriller')),
    $movie5 = new Movie('Toy Story - Il Mondo Dei Giocattoli', 'Toy Story', 'it', '1995-11-19', 9.0, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg', new Genre('Animation')),
    $movie6 = new Movie('Pulp Fiction', 'Pulp Fiction', 'de', '1994-10-14', 9.2, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg', new Genre('Crime/Drama')),
    $movie7 = new Movie('Forrest Gump', 'Forrest Gump', 'fr', '1994-06-23', 8.8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', new Genre('Drama')),
    $movie8 = new Movie('Guerre Stellari', 'Star Wars', 'en', '1977-05-25', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg', new Genre('Fantasy')),
    $movie9 = new Movie("E.T. - L'extra-terrestre", 'E.T. The Extra-Terrestrial', 'en', '1982-05-26', 7.9, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg', new Genre('Fantasy')),
    $movie10 = new Movie('Il silenzio degli innocenti', 'The Silence of the Lambs', 'en', '1991-01-30', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg', new Genre('Crime/Drama'))
];

$movie1->setId(1);
$movie2->setId(2);
$movie3->setId(3);
$movie4->setId(4);
$movie5->setId(5);
$movie6->setId(6);
$movie7->setId(7);
$movie8->setId(8);
$movie9->setId(9);
$movie10->setId(10);