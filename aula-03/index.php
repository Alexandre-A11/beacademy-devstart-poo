<?php

include "product.php";
include "category.php";

$c1 = new Category("Bebidas", "Refrigerantes, água, etc.");
$c2 = new Category("Lanches", "Pão, hamburguer, etc.");

var_dump($c1);
var_dump($c2);

$p1 = new Product("Notebook", 2000);
$p1->setDescription("Notebook Dell");
// $p1->setName("Notebook");
// $p1->setPrice(2000);

$p2 = new Product("Mouse", 100);
$p2->setDescription("Mouse Logitech");
// $p2->setName("Mouse");
// $p2->setPrice(100);

$p3 = new Product("Teclado", 150);
// $p3->setName("Teclado");
// $p3->setPrice(150);

var_dump($p1);
var_dump($p2);
var_dump($p3);
