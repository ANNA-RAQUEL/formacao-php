<!-- a partir da altura e peso fazer o calculo do imc
peso / altura²
 -->

<?php

$peso = 67.00;
$altura = 1.75;

$imc = $peso / $altura ** 2;


if ($imc < 19.9) {

    echo "$imc Você esta magro, jovem";

} else if ($imc >= 20 || $imc <= 24.9) {

    echo "$imc Você está de boa, jovem";

} else {

    echo "$imc Você está gordo, jovem";
}