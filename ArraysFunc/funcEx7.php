<?php

$movies = ['Blade Runner', 'Drive', 'Lord Of The Rings I'];

$movie = implode(', ', $movies);    # Converts an array to an entire string by using a string 'separator'
print_r($movie);