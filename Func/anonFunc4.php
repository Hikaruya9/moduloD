<?php

$words1 = ["It's ", "fear ", "that "];
$words2 = ["gives ", "men ", "wings."];

$concStr = function($words1, $words2){
    $words1 = implode("", $words1);
    $words2 = implode("", $words2);
    return $wordsMerged = $words1 . $words2;
};

echo ($concStr($words1, $words2));