<?php

class Titular
{
   
    private string $nome;
    private Cpf $cpf;

    public function __construct(Cpf $cpf, string $nome)
    {

        $this->validaNomeTitular($nome);
        $this->nome =  $nome;
        $this -> cpf = $cpf;
        
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumeroCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
}