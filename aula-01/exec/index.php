<?php

declare(strict_types=1);
ini_set("display_errors", 1);

include "Professor.php";
include "Curso.php";
include "Disciplina.php";


$curso1 = new Curso();
$curso1->trocarNome("Curso de PHP");
$curso1->trocarCargaHoraria(100);
$curso1->trocarPeriodo(1);

$disciplina1 = new Disciplina();
$disciplina1->nome = "PHP";
$disciplina1->escola = "Escola de PHP";
$disciplina1->professor = new Professor();
$disciplina1->professor->nome = "Professor PHP";
$disciplina1->professor->cpf = "123456789";
$disciplina1->professor->salario = 1000;

$professor2 = new Professor();
$professor2->trocarNome("Alessandro");
$professor2->cpf = "987654321";
$professor2->trocarSalario(2000);


// var_dump($curso1);
// var_dump($disciplina1);
// var_dump($professor2);

echo "<br>" . $curso1->nome;
echo "<br>" . $disciplina1->professor->nome;
echo "<br>" . $disciplina1->professor->salario;
echo "<br>" . $professor2->nome;
echo "<br>" . $professor2->cpf;
echo "<br>" . $professor2->salario;
