<?php

include "product.php";
include "category.php";

$c1 = new Category("Bebidas", "Refrigerantes, água, etc.");
$c2 = new Category("Lanches", "Pão, hamburguer, etc.");
$c3 = new Category("Sobremesas", "Salgados, doces, etc.");

$p1 = new Product("Coca-Cola", 5.00, $c1);
$p1->setDescription("Refrigerante de cola");
// $p1->setName("Notebook");
// $p1->setPrice(2000);

$p2 = new Product("Pão de Queijo", 3.00, $c2);
$p2->setDescription("Pão de queijo com molho de tomate");
// $p2->setName("Mouse");
// $p2->setPrice(100);

$p3 = new Product("Bolo de Chocolate", 2.00, $c3);
// $p3->setName("Teclado");
// $p3->setPrice(150);
// $p3->setCategory($c3); // Não funciona pois o atributo category é readonly

var_dump($p1);
var_dump($p2);
var_dump($p3);
