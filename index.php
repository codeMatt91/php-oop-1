<?php

require 'class/Movie.php';
require 'data/data.php';

$movie_first = new Movie('Shining', 'Horror', 'Stanley Kubrick', $plot1);
$movie_second = new Movie('Shutter Island', 'Thriller', 'Martin Scorsese', $plot2);
$movie_third = new Movie('Lord of the rings', 'Fantasy', 'Peter Jackson', $plot1);

var_dump($movie_first);
var_dump($movie_second);
var_dump($movie_third);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>OOP</title>
</head>

<body>

</body>

</html>