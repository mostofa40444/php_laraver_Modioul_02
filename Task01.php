<?php
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo PHP_EOL;
}

function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
    echo PHP_EOL;
}

function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}

// Call the functions to print even numbers
$start = 2; // Starting from 2 to ensure we start with an even number
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersForLoop($start, $end, $step);

echo "Using while loop: ";
printEvenNumbersWhileLoop($start, $end, $step);

echo "Using do-while loop: ";
printEvenNumbersDoWhileLoop($start, $end, $step);