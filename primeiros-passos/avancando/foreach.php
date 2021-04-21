<?php

$contasCorrentes = [

    12345678910 => [
        'titular'=> 'Vinicius',
        'saldo'=>1000
    ],
    
    10987456123 => [
    'titular'=> 'Maria',
    'saldo'=>10000
    ],

    '954.123.678-10' => [
        'titular'=> 'Alberto',
        'saldo'=>300
    ]

];
// adicionando um item á lista

$contasCorrentes['123.456.789-15'] = [
    'titular'=> 'Anna',
    'saldo'=>3003
];

foreach ($contasCorrentes as $cpf => $conta) {

    echo $cpf . " " . $conta['titular'] . PHP_EOL;

}