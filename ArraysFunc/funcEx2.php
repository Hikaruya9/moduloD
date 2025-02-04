<?php

$artists1 = ['Shinedown', 'Red', 'Led Zeppelin'];
$artists2 = ['Beatles', 'Elliott Smith', 'King Crimson'];

$artists = array_merge($artists1, $artists2);   # Merge both arrays into a third one sequentialy
print_r($artists);