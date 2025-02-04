<?php

$songKeys = ['Artist', 'Album', 'Title'];
$songValues = ['Shinedown', 'Sound Of Madness', 'Second Chance'];

$song = array_combine($songKeys, $songValues); # Combine both arrays to make a new associative one  # first parameter is for 'keys' and second for 'values'
print_r($song);