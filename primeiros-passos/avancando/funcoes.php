<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {

        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . '<b>';
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}


