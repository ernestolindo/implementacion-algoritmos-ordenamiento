<?php
$arraycito = [1, 31, 319, 2, 29, 7];
$words = ["gato", "perro", "casa", "arbol", "feliz", "amigo", "libro", "agua", "sol", "cielo"];

function mergeSort($array)
{
    if (count($array) <= 1) return $array;

    $middle = floor(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

echo "Array original: " . implode(", ", $words) . PHP_EOL;
echo "Array ordenado: " . implode(", ", mergeSort($words)) . PHP_EOL;
