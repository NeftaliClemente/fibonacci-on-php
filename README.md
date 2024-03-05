# fibonacci-on-php
# Generador de Serie de Fibonacci en PHP

## Descripción del código:

El siguiente código PHP genera y muestra en pantalla los primeros términos de la serie de Fibonacci.

1. **Función de Fibonacci:**
   ```php
   function fibonacci($n) {
       $fib = array(0, 1); // Inicializa los primeros dos términos de la serie
       for ($i = 2; $i < $n; $i++) {
           // Calcula los siguientes términos de la serie sumando los dos términos anteriores
           $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
       }
       return $fib; // Devuelve la serie de Fibonacci hasta el término $n
   }
- Esta función toma un número entero $n como parámetro y genera la serie de Fibonacci hasta ese término.

a) **Generación de la Serie:**
```php
// Número de términos en la serie de Fibonacci que deseas mostrar
$num_terminos = 10;
```php
// Generar la serie de Fibonacci llamando a la función `fibonacci`
$serie_fibonacci = fibonacci($num_terminos);

b) **Mostrar la Serie de Fibonacci en pantalla:**
```php
// Mostrar la serie de Fibonacci en pantalla
echo "Serie de Fibonacci hasta el término $num_terminos:\n";
foreach ($serie_fibonacci as $valor) {
    echo $valor . " "; // Muestra cada término de la serie seguido de un espacio en pantalla
}

-  Utilizando un bucle foreach, cada término de la serie de Fibonacci se muestra en la pantalla seguido de un espacio.

**Ejemplo de ejecución:**

Para ejecutar el código y obtener los primeros 10 términos de la serie de Fibonacci, simplemente guarda el código PHP en un archivo llamado fibonacci.php y ejecútalo en un servidor PHP. Por ejemplo:

php fibonacci.php

Esto mostrará la serie de Fibonacci hasta el término 10 en la salida estándar.

Serie de Fibonacci hasta el término 10:
0 1 1 2 3 5 8 13 21 34

