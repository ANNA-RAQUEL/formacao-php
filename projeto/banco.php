<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpf = new Cpf('123.456.789-10');
$vinicius = new Titular($cpf, 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($primeiraConta);
echo Conta::recuperaNumeroDeContas();