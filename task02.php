<?php
//Answer to task 2
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i, PHP_EOL;
}
