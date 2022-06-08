<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController {
    public function indexAction(): void {
        // echo dirname(__DIR__);
        include "../src/View/index/index.php";
    }

    public function loginAction(): void {
        include "../src/View/index/login.php";
    }
}
