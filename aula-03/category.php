<?php

declare(strict_types=1);

class Category {
    /*
    private string $name;
    private string $description;

    public function __construct(string $newName, string $newDescription) {
        $this->name = $newName;
        $this->description = $newDescription;
    }
    */

    // adicionado no PHP 8
    public function __construct(private string $nome, private string $description) {
    }
}
