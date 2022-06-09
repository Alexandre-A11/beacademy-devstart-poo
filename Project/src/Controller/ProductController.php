<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController extends AbstractController {
    public function listAction(): void {
        // include "../src/View/product/list.php";
        parent::render("product/list");
    }

    public function addAction(): void {
        // include "../src/View/product/add.php";
        parent::render("product/add");
    }

    public function editAction(): void {
        // include "../src/View/product/edit.php";
        parent::render("product/edit");
    }
}
