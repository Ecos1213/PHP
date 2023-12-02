<?php

$valorAnterior = 0;
$valorInicial = 1;

$casaARecorrer = readline("Digite la casa a la cual se va a dirigir: ");

if($casaARecorrer == 1) {
    echo "la casa numero $casaARecorrer tiene ". 0 . " caminos diferentes para llegar a ella \n";
    exit;
}

for($i = 2; $i <= $casaARecorrer; $i++) {

    $resultado = $valorAnterior + $valorInicial;
    $valorAnterior = $valorInicial;
    $valorInicial = $resultado;

}


echo "la casa numero $casaARecorrer tiene ". $resultado . " caminos diferentes para llegar a ella \n";

