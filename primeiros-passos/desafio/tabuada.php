<!-- resultado da multiplicação de um número qualquer 1 até 9 -->
<?php

$numero = 9;

for ($i = 0; $i <= 9; $i++) {

    $vezes = $i * $numero;
    
    echo "$i x $numero = $vezes" . PHP_EOL;
}