<?php
//For loop step 1 incrementing even output; this function is extra from assignment

function getEvenForStep1($numLen) {
    for ($i = 1; $i < $numLen; $i++) {
        if ($i % 2 == 0) {
            echo $i, PHP_EOL;
        }
    }
}
echo "<<<========= For loop even number incrementing step 01 ========>>>", PHP_EOL;
getEvenForStep1(20);

//For loop according to increment step 2 or where $i=$i+2

function getEvenForStep2($numLen) {
    for ($i = 2; $i <= $numLen; $i += 2) {
        echo $i, PHP_EOL;
    }
}
echo "<<<========= For loop even number incrementing step 2 ========>>>", PHP_EOL;
getEvenForStep2(20);

//While loop according to increment step 2

function getEvenWhile($numLen) {
    $i = 2;
    while ($i <= $numLen) {
        echo $i, PHP_EOL;
        $i += 2;
    }
}
echo "<<<========= While loop even number incrementing step 2 ========>>>", PHP_EOL;
getEvenWhile(20);

//Do...While..Loop where $i=i+2 or two step incrementing
function getEvenDoWhile($numLen) {
    $i = 2;
    do {
        echo $i, PHP_EOL;
        $i += 2;
    } while ($i <= 20);
}
echo "<<<========= Do...While loop even number incrementing step 02 ========>>>", PHP_EOL;
getEvenDoWhile(20);