<?php

declare(strict_types=1);

abstract class Validar {
    public static function validarCpf(string $cpf): void {
        if (strlen($cpf) !== 11) {
            die("CPF Inválido");
        }
    }
}
