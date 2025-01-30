<?php

$numbers1 = [];
$numbers2 = [];

for ($i = 0; $i < 20; $i++) {
    if ($i < 10) {
        echo "Digite um número para a primeira lista: ";
        $n = readLine();
        $numbers1[] = $n;
    } else {
        echo "Digite um número para a segunda lista: ";
        $n = readLine();
        $numbers2[] = $n;
    }
}

for ($i = 0; $i < 10; $i++) {
    $res = $numbers1[$i] * $numbers2[$i];
    print($numbers1[$i] . " * " . $numbers2[$i] . " = " . $res . "\n");
}