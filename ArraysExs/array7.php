<?php

$people; # Lista para guardar as pessoas cadastradas
$contM = 0; # Contador para os homens

# Insere os dados digitados na lista
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

# Exibe a listagem com nome e idade de todos os cadastrados
echo "Lista com nome e idade dos cadastrados:\n";
foreach($people as $person){
    print("Nome: " . $person['Nome'] . "\tIdade:" . $person['Idade'] . "\n");
}

# Exibe o nome das pessoas que moram na cidade de 'Santos'
echo "Lista das pessoas que moram em Santos: \n";
foreach($people as $person){
    if ($person['Cidade'] == "Santos"){
        print("Nome: " . $person['Nome'] . "\n");
    }
}

# Mostra a listagem daqueles que tem mais de 18 anos
echo "Listagem daqueles com mais de 18 anos: \n";
foreach($people as $person){
    if ($person['Idade'] >= 18){
        print("Nome: " . $person['Nome'] . "\n");
    }
}

# Verifica quantos homens há na lista e acrescenta no contador
foreach($people as $person){
    if ($person['Sexo'] == "M" || $person['Sexo'] == "m"){
        $contM++;
    }
}

print($contM . " dos cadastrados são homens."); # Exibe quantos homens tem na lista