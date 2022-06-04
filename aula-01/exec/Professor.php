<?php

declare(strict_types=1);

class Professor {
    public string $nome;
    public string $cpf;
    public float $salario;

    public function trocarNome(string $novoNome): void {
        $this->nome = $novoNome;
    }

    public function trocarSalario(float $novoSalario): void {
        $this->salario = $novoSalario;
    }
}
