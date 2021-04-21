<?php

//objeto Conta
class Conta
{
    //Atributos
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;


    // métodos magicos

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    // métodos

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {

            //this é a referencia para o objeto que chamou o metodo

            echo "saldo indidponivel";

            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {

            echo "Valor precisa ser positivo";

            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void

    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float

    {
        return $this->saldo;
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}
