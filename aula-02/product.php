<?php

declare(strict_type=1);


class Product {
    // Atributos
    private string $name;
    private float $price;

    // Métodos
    public function takeName(): string {
        return $this->name;
    }

    public function changeName(string $newName): void {
        $this->name = $newName;
    }

    public function takePrice(): float {
        return $this->price;
    }

    public function changePrice(float $newPrice): void {
        if ($newPrice < 0) {
            throw new Exception("Valor não pode ser negativo!");
        }
        $this->price = $newPrice;
    }
}
