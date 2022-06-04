<?php

declare(strict_type=1);


class Product {
    // Atributos
    private string $name;
    private float $price;
    private string $descrition;

    // Métodos
    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
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
}
