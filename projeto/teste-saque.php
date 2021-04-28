<?php
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37'),
    )
);

$contaDois = new ContaPoupanca(
    new Titular(
        new CPF('185.456.789-10'),
        'Anna Dias',
        new Endereco('lala', 'bairro Teste', 'Rua lá', '37'),
    )
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo() .PHP_EOL;

$contaDois->deposita(500);
$contaDois->saca(100);
echo $contaDois->recuperaSaldo() .PHP_EOL;


$conta->transfere(50, $contaDois);
echo $contaDois->recuperaSaldo();