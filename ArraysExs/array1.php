<?php

# Lista e variáveis
$alunos;
$listSize = 10; # Define o tamanho que a lista de alunos terá
$nota = 0 . $maiorNota = 0;
$name = "" . $alunoMaiorNota = "";
$media = 0;

# Envia um prompt ao usuário para que digite o nome e nota de cada aluno para inserir na lista
for ($i = 0; $i < $listSize; $i++) {
    echo "Digite o nome do aluno: ";
    $name = readline();
    echo "Digite a nota do aluno: ";
    $nota = readline();
    if ($nota >= 0 && $nota <= 10){ # Checa se a nota digitada é válida
        $alunos[] = ['Nome' => $name, 'Nota' => $nota];
    } else {
        echo "Nota inválida, digite novamente o nome e a nota do aluno.";
        $i--;
    }
}

# Realiza a soma das notas dos alunos cadastrados
foreach ($alunos as $aluno) {
    $media += $aluno['Nota'];
    if ($aluno['Nota'] > $maiorNota) { # Faz uma checagem para guardar o nome do aluno com a maior nota
        $maiorNota = $aluno['Nota'];
        $alunoMaiorNota = $aluno['Nome'];
    }
}

# Divide a soma total da nota dos alunos e divide pela quantidade de cadastrados da lista
$media /= $listSize;

# Exibe a média e a maior nota dos alunos cadastrados
print("A nota média dos alunos é: " . $media . "\n");
print("O aluno com a maior nota é o: " . $alunoMaiorNota);