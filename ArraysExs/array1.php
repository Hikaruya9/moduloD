<?php

$alunos = [];
$nota = 0 . $maiorNota = 0;
$name = "" . $alunoMaiorNota = "";
$media = 0;
// $nota = [4, 4.5, 7, 6, 9, 9.5, 10, 2, 3.5, 5];
// $name = ["Jorge", "Cleber", "Cleiton", "Gabriel", "Leonardo", "Alisson", "Rubens", "Cintia", "Larissa", "Rodrigo"];

for ($i = 0; $i < 10; $i++) {
    echo "Digite o nome do aluno: ";
    $name = readline();
    echo "Digite a nota do aluno: ";
    $nota = readline();
    if ($nota >= 0 && $nota <= 10){
        $alunos[] = ['Nome' => $name, 'Nota' => $nota];
    } else {
        echo "Nota inválida, digite novamente o nome e a nota do aluno.";
        $i--;
    }
}

foreach ($alunos as $aluno) {
    $media += $aluno['Nota'];
    if ($aluno['Nota'] > $maiorNota) {
        $maiorNota = $aluno['Nota'];
        $alunoMaiorNota = $aluno['Nome'];
    }
}

$media /= 10;

print("A nota média dos alunos é: " . $media . "\n");
print("O aluno com a maior nota é o: " . $alunoMaiorNota);