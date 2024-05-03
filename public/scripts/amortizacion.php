<?php
error_reporting (E_ALL ^ E_NOTICE);

if(!isset($tas)){
    $cap = $_POST['monto'];
    $tas = $_POST['tasa'];
    $per = $_POST['periodo'];

    $tasaint = ($tas)/100;
    $saldoini = $cap;
    //Operacion para el calculo de amortización
    $amortizacion = $cap == 0 ? 0 : (float)($cap/$per);
}
?>
