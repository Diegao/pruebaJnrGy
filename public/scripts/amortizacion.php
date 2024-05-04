<?php
error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['monto'], $_POST['tasa'], $_POST['periodo'])) {
    $cap = $_POST['monto'];
    $tas = $_POST['tasa'];
    $per = $_POST['periodo'];

    $tasaint = ($tas) / 100;
    $saldoini = $cap;

    // Operación para el cálculo de amortización
    $amortizacion = $cap == 0 ? 0 : (float)($cap / $per);

    // Calcular amortizaciones
    $amortizaciones = array();
    $capital = (float)$saldoini;
    for ($i = 1; $i <= $per; $i++) {
        $saldo = $capital;
        $int = ($capital * $tasaint);
        $abono = $amortizacion;
        $pago = ($amortizacion + $int);
        $saldofin = ($saldo - $abono);
        $capital = $saldofin;

        // Guardar datos de amortización en un array
        $amortizaciones[] = array(
            'periodo' => $i,
            'saldo' => number_format($saldo, 2, ".", ","),
            'interes' => number_format($int, 2, ".", ","),
            'abono' => number_format($abono, 2, ".", ","),
            'pago' => number_format($pago, 2, ".", ",")
        );
    }

    // Devolver los datos como JSON
    echo json_encode($amortizaciones);
} else {
    // Si los datos no están definidos, devolver un mensaje de error
    echo "Error: Datos del formulario no recibidos correctamente.";
}
?>
