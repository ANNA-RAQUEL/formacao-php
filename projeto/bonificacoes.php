<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula', new CPF('123.951.789-11')
    , 5000
);

$umEditor = new EditorVideo('Anna Raquel',
new CPF('123.123.123-22'), 1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);


echo $controlador->recuperaTotal();