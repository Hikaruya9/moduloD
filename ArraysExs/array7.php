<?php

$people;
$contM = 0;


for ($i = 0; $i < 10; $i++) {
    echo "Novo cadastro\n";
    echo "Nome: ";
    $name = readline();
    echo "Cidade: ";
    $city = readline();
    echo "Idade: ";
    $age = readline();
    echo "Sexo: ";
    $sex = readline();
    
    $people[] = ['Nome' => $name, 'Cidade' => $city, 'Idade' => $age, 'Sexo' => $sex];
}

echo "Lista com nome e idade dos cadastrados:\n";
foreach($people as $person){
    print("Nome: " . $person['Nome'] . "\tIdade:" . $person['Idade'] . "\n");
}

echo "Lista das pessoas que moram em Santos: \n";
foreach($people as $person){
    if ($person['Cidade'] == "Santos"){
        print("Nome: " . $person['Nome'] . "\n");
    }
}

echo "Listagem daqueles com mais de 18 anos: \n";
foreach($people as $person){
    if ($person['Idade'] >= 18){
        print("Nome: " . $person['Nome'] . "\n");
    }
}

foreach($people as $person){
    if ($person['Sexo'] == "M" || $person['Sexo'] == "m"){
        $contM++;
    }
}
print($contM . " dos cadastrados são homens.");