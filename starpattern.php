<?php
    $size = 5;
    
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $size - 1; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
