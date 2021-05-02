<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'pretopolis',
    'bairrodcvd',
    'rua',
    '22'

);

$outroEndereco = new Endereco(
    'Kanku',
    'bairro kkk',
    'rua',
    '22'

);

echo $umEndereco->bairro;
exit();


echo $umEndereco . PHP_EOL;
echo $outroEndereco;
