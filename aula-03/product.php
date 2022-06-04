<?php

declare(strict_type=1);


class Product {
    // Atributos
    private string $name;
    private float $price;
    private string $descrition;
    private readonly Category $category; // readonly = não pode ser alterado, PHP 8.1

    // Método mágico de construção de objetos
    public function __construct(string $newName, float $newPrice, Category $newCategory) {
        $this->name = $newName;
        $this->price = $newPrice;
        $this->category = $newCategory;
    }


    public function takeName(): string {
        return $this->name;
    }

    public function setName(string $newName): void {
        $this->name = $newName;
    }

    public function takePrice(): float {
        return $this->price;
    }

    public function setPrice(float $newPrice): void {
        if ($newPrice < 0) {
            throw new Exception("Valor não pode ser negativo!");
        }
        $this->price = $newPrice;
    }

    public function getDescription(): string {
        return $this->descrition;
    }

    public function setDescription(string $newDescription): void {
        $this->descrition = $newDescription;
    }

    public function setCategory(Category $newCategory): void {
        $this->category = $newCategory;
    }
}
