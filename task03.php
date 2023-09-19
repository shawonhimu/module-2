<?php

$old_one = 0;
$old_two = 1;
$new_one = 1;
for ($j = 0; $j < 10; $j++) {
    echo $old_one, PHP_EOL;
    $old_two = $new_one;
    $new_one = $old_one + $old_two;
    $old_one = $old_two;
    if ($old_one > 100) {
        break;
    }
}
