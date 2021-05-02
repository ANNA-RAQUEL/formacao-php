<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumeroCpf();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function alteraNome(string $nome): void
{
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
}

}