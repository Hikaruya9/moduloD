<?php

$songKeys = ['Artist', 'Album', 'Title'];
$songValues = ['Shinedown', 'Sound Of Madness', 'Second Chance'];

$song = array_combine($songKeys, $songValues);
print_r($song);