<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbstractController {
    public function indexAction(): void {
        // echo dirname(__DIR__);
        // include "../src/View/index/index.php";
        parent::render("index/index");
    }

    public function loginAction(): void {
        // include "../src/View/index/login.php";
        parent::render("index/login");
    }
}
