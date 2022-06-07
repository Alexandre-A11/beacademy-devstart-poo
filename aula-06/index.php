<?php

use Classes\Usuario;

ini_set("display_errors", 1);

/*
include "classes/Categoria.php";
include "classes/Cliente.php";
include "classes/Gestor.php";
include "classes/Produto.php";
include "classes/Usuario.php";
include "classes/Config/Usuario.php";
*/

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria;

// $us1 = new Classes\Usuario();
$us2 = new UsuarioConfig();

$c1 = new Categoria();

// var_dump($us1);
var_dump($us2);

echo "Worked! 😄";
