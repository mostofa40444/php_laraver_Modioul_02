<?php
//Task 2: Using a for loop to print numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Check if the current number is a multiple of 5
    if ($i % 5 == 0) {
        continue; // Skip this iteration and continue to the next
    }
    
    echo $i . ' ';
}
echo "\n";