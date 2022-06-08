<?php

ini_set("display_errors", 1);

include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;

$c = new IndexController();
// $c->indexAction();
$c->loginAction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

// echo "Hello World!";
