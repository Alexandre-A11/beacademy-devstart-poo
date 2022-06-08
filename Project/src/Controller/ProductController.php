<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController {
    public function listAction(): void {
        include "../src/View/product/list.php";
    }

    public function addAction(): void {
        include "../src/View/product/add.php";
    }

    public function editAction(): void {
        include "../src/View/product/edit.php";
    }
}
