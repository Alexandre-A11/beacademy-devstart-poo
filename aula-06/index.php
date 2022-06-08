<?php

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
// reference the Dompdf namespace
use Dompdf\Dompdf;

$us2 = new UsuarioConfig();
$c1 = new Categoria();

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = "";

for ($n = 0; $n < 10; $n++) {
    $html .= "Hello! <br>";
}

$dompdf->loadHtml('<h1>hello world</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
