<?php

echo "Digite um número: ";
$n1 = readLine();
echo "Digite outro número: ";
$n2 = readLine();
$res;

echo "\n";
echo "1: Adição\n";
echo "2: Subtração\n";
echo "3: Multiplicação\n";
echo "4: Divisão\n";
echo "\n";
echo "Digite o número correspondente à operação que deseja realizar: ";
$escolha = readline();

switch ($escolha) {
    case 1:
        $res = $n1 + $n2;
        print("O resultado da operação é: " . $res);
        break;
    case 2:
        $res = $n1 - $n2;
        print("O resultado da operação é: " . $res);
        break;
    case 3:
        $res = $n1 * $n2;
        print("O resultado da operação é: " . $res);
        break;
    case 4:
        $res = $n1 / $n2;
        print("O resultado da operação é: " . $res);
        break;
    default:
        echo "O número digitado é inválido!";
}
