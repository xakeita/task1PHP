<?php

/**
 * 素数判定関数(true:素数,false:素数ではない)
 *
 * @param float $num
 * @return bool
 */
function isPrimeNumber(int $num): bool
{
    if ($num <= 1) {
        return false;
    }

    $max = (int)sqrt($num);
    for ($i = 2; $i <= $max; ++$i) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
