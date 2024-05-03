<?php
function factorial($n) {
    $n = intval($n); // Convierte $n a entero
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $result = factorial($num);
    echo $result; // Solo devuelve el resultado numérico
}
?>
