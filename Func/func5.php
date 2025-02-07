<?php

$numbers = [4,9,24,3,11];
calcMedia($numbers);

function calcMedia($numbers){
    $media = null;
    for ($i = 0; $i < count($numbers); $i++){
        if ($media == null){
            $media = $numbers[$i];
        }else{
            $media += $numbers[$i];
        }
    }
    return $media;
}