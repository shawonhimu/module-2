<?php

function fibonacci($i) {
    $old_one = 0;
    $old_2 = 1;
    $new_one = 1;
    for ($j = 0; $j < $i; $j++) {
        echo $old_one, PHP_EOL;
        $old_2 = $new_one;
        $new_one = $old_one + $old_2;
        $old_one = $old_2;
    }

}

fibonacci(15);