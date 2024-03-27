<?php

$nota1 = 2.1;
$nota2 = 3.4;
$nota3 = 6.5;

$media = ($nota1 + $nota2 + $nota3)/3;

echo "A média do aluno é: $media" . PHP_EOL;

//informando condição do aluno
if ($media < 7){
    echo 'Aluno reprovado';
}else if($media >= 7 ){
    echo 'Aluno aprovado';
}