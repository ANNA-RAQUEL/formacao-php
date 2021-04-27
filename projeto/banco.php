<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';



use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Paraíso', 'Oeste', 'rua 1', '635');
$anna = new Titular(new CPF('123.456.789-10'), 'Anna RAQUEL', $endereco);
$primeiraConta = new Conta($anna);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

var_dump($primeiraConta);