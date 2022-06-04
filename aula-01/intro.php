<?php
include "Aluno.php";

$a1 = new Aluno();
$a1->nome = "Luana";
$a1->cpf = "123.456.789-10";

$aluno = [
    "nome" => "Alexandre",
    "cpf" => "123.456.789-10",
];
$aluno1 = [
    "Nome" => "Fernanda",
    "cpf" => "234.456.789-10",
];
$aluno2 = [
    "NOME" => "Karen",
    "CPF" => "345.456.789-10",
];
