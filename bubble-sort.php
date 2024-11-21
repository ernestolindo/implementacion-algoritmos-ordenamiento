<?php

function bubbleSort($array)
{
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // intercambiar
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$arraycito = [1, 31, -319, 2, 29, -7];
echo "Array original: " . implode(", ", $arraycito) . PHP_EOL;
echo "Array ordenado: " . implode(", ", bubbleSort($arraycito)) . PHP_EOL;
