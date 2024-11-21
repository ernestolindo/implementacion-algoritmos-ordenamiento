<?php

$arraycito = [1, 31, 319, 2, 29, 7];
$nombres = ["Ernesto", "Bryan", "Raul", "Juan", "Diego"];

function insertionSort($array)
{
    $length = count($array);

    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        $array[$j + 1] = $key;
    }
    return $array;
}

echo "Array original: " . implode(", ", $nombres) . PHP_EOL;
echo "Array ordenado: " . implode(", ", insertionSort($nombres)) . PHP_EOL;
