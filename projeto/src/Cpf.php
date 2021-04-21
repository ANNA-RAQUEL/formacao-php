<?php

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this -> numero = $numero;
    }

    public function recuperaNumeroCpf(): string
    {
        return $this->numero;
    }

}