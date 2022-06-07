<?php
ini_set('display_errors', 1);

include "User.php";
include "Client.php";
include "Manager.php";
include "GeneralManager.php";

$cliente_01 = new Cliente("erika@email.com", "e123456");
$cliente_01->setNome("Erika");
$cliente_01->setDataCadastro("01/01/2009");

$gestor_01 = new Manager("alexandre@email.com", "a123456", 0);
$gestor_01->setNome("Alexandre");
$gestor_01->setSalario(6000);

$gestorGeral_01 = new GeneralManager("fernanda@email.com", "f123456", 8000);

$hacker = new Usuario("hacker@email.com", "password");

var_dump($cliente_01);
var_dump($gestor_01);
var_dump($gestorGeral_01);

var_dump($hacker);
