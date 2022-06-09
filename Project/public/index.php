<?php

ini_set("display_errors", 1);

include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode("?", $_SERVER["REQUEST_URI"])[0];

if ($url === "/") {
    $c = new IndexController();
    $c->indexAction();
} elseif ($url === "/login") {
    $c = new IndexController();
    $c->loginAction();
} elseif ($url === "/product") {
    $p = new ProductController();
    $p->listAction();
    $p->addAction();
    $p->editAction();
} else {
    $e = new ErrorController();
    $e->notFoundAction();
}



// echo "Hello World!";
