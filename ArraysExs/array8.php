<?php

# Inserção das informações dos carros
$carros = [
['No. registro' => "0", 'Modelo' => "Uno", 'Fabricante' => "Fiat", 'Cor' => "Prata", 'Portas' => 4, 'Ano' => 2014],
['No. registro' => "1", 'Modelo' => "Fiesta", 'Fabricante' => "Ford", 'Cor' => "Preto", 'Portas' => 2, 'Ano' => 2015],
['No. registro' => "2", 'Modelo' => "Doblo", 'Fabricante' => "Fiat", 'Cor' => "Verde", 'Portas' => 4, 'Ano' => 2013],
['No. registro' => "3", 'Modelo' => "Celta", 'Fabricante' => "GM", 'Cor' => "Preto", 'Portas' => 2, 'Ano' => 2012],
['No. registro' => "4", 'Modelo' => "March", 'Fabricante' => "Nissan", 'Cor' => "Prata", 'Portas' => 2, 'Ano' => 2015],
['No. registro' => "5", 'Modelo' => "Corsa", 'Fabricante' => "GM", 'Cor' => "Branco", 'Portas' => 2, 'Ano' => 2010],
['No. registro' => "6", 'Modelo' => "Ranger", 'Fabricante' => "Ford", 'Cor' => "Prata", 'Portas' => 4, 'Ano' => 2012],
['No. registro' => "7", 'Modelo' => "Trail Blazer", 'Fabricante' => "GM", 'Cor' => "Branco", 'Portas' => 4, 'Ano' => 2014],
['No. registro' => "8", 'Modelo' => "Ecosport", 'Fabricante' => "Ford", 'Cor' => "Preto", 'Portas' => 4, 'Ano' => 2013],
['No. registro' => "9", 'Modelo' => "Tucson", 'Fabricante' => "Hyundai", 'Cor' => "Vinho", 'Portas' => 4, 'Ano' => 2012]
];

# Mostra a listagem de todos os veículos, exibindo o modelo e ano de cada um
echo "\nListagem dos modelos e anos de cada veículo:\n";
foreach($carros as $carro){
    print("Modelo: " . $carro['Modelo'] . "\t\tAno: " . $carro['Ano'] . "\n");
}

# Lista somente aqueles veículos que tem cor 'Prata'
echo "\nLista somente com veículos de cor Prata:\n";
foreach($carros as $carro){
    if($carro['Cor'] == "Prata"){
        print("No. registro: " . $carro['No. registro'] . "\tModelo: " . $carro['Modelo'] . "\tFabricante: " . $carro['Fabricante'] . "\tCor: " . $carro['Cor'] . "\tQuant. Portas: " . $carro['Portas'] . "\tAno:" . $carro['Ano'] . "\n");
    }
}

# Exibe a cor e quantidade de portas de cada veículo armazenado
echo "\nLista mostrando cor e quantidade de portas de todos os veículos:\n";
foreach($carros as $carro){
    print("Cor: " . $carro['Cor'] . "\t\tQuantidade de portas: " . $carro['Portas'] . "\n");
}

# Exibe a listagem de todos os veículos da fabricante 'Ford'
echo "\nListagem de todos os veículos da Ford:\n";
foreach($carros as $carro){
    if ($carro['Ano'] >= 2013){
        print("No. registro: " . $carro['No. registro'] . "\tModelo: " . $carro['Modelo'] . "\tFabricante: " . $carro['Fabricante'] . "\tCor: " . $carro['Cor'] . "\tQuant. Portas: " . $carro['Portas'] . "\tAno:" . $carro['Ano'] . "\n");
    }
}