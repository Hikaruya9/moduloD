<?php

$words = ["Everything", "is", "a", "cliche", "until", "it's", "happening", "to", "you"];

$sortByLength = function($w1, $w2){
    return strlen($w1) - strlen($w2);
};

usort($words, $sortByLength);
print_r($words);