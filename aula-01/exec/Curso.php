<?php

declare(strict_types=1);

class Curso {
    public string $nome;
    public int $cargaHoraria;
    public int $periodo;

    public function trocarNome(string $novoNome): void {
        $this->nome = $novoNome;
    }

    public function trocarCargaHoraria(int $novaCargaHoraria): void {
        $this->cargaHoraria = $novaCargaHoraria;
    }

    public function trocarPeriodo(int $novoPeriodo): void {
        $this->periodo = $novoPeriodo;
    }
}
