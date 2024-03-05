<?php
// Función para generar la serie de Fibonacci hasta un número dado
function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Número de términos en la serie de Fibonacci que deseas mostrar
$num_terminos = 10;

// Generar la serie de Fibonacci
$serie_fibonacci = fibonacci($num_terminos);

// Mostrar la serie de Fibonacci en pantalla
echo "Serie de Fibonacci hasta el término $num_terminos:\n";
foreach ($serie_fibonacci as $valor) {
    echo $valor . " ";
}
?>
