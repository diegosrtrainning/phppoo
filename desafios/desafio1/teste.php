<?php

require 'aluno.php';
require 'alunoUniversitario.php';

$notasAnna = [5,10,4,6];
$aluno = new Aluno($notasAnna);
$aluno->setNome("Anna Raio");
$aluno->setIdade(4);

echo $aluno->getNome(), " foi ", $aluno->getAprovacao() . PHP_EOL;

$alunoUniversitario = new AlunoUniversitario([5,10,4,6,7]);
$alunoUniversitario->setNome("Zé Trovão");
$alunoUniversitario->setIdade(8);
echo $alunoUniversitario->getNome(), " foi ", $alunoUniversitario->getAprovacao();


?>