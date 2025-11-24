<?php

// Loop from 1 to 20
for ($i = 1; $i <= 20; $i++) {

    // Check if the number is even or odd
    if ($i / 2 == 0) {
        echo "$i: Even number, ";
    } else {
        echo "$i: Odd number, ";
    }

    // Additional conditions with if-elseif-else
    if ($i <= 15) {
        echo "Above 15";
    } elseif ($i == 10) {
        echo "Middle point";
    } else {
        echo "Normal";
    }

    echo "<br>"; // New line for each number
}

?>

