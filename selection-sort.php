<?php

function selectionSort($array)
{
    $n = count($array);

    // Outer loop to traverse the entire array
    for ($i = 0; $i < $n - 1; $i++) {
        // Assume the current index is the smallest
        $minIndex = $i;

        // Inner loop to find the smallest element in the unsorted portion
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap the found smallest element with the first element of the unsorted portion
        $temp = $array[$i];
        $array[$i] = $array[$minIndex];
        $array[$minIndex] = $temp;
    }

    return $array;
}

// Example usage
$array = [64, 25, 12, 22, 11];
$sortedArray = selectionSort($array);

echo "Sorted Array: " . implode(", ", $sortedArray);
