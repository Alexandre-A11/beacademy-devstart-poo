<?php

ini_set("display_erros", 1);

include "Validar.php";
include "ValidarBR.php";
include "ValidarUS.php";


$cpf = "12345678912";
$docX = "12345678912345";

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);
