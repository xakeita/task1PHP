<?php

/**
 * 素数判定関数(true:素数,false:素数ではない)
 *
 * @param float $num
 * @return bool
 */
function isPrimeNumber(int $num): bool
{
    if ($num === 1) {
        //1は素数ではない
        return false;
    } else {
        for ($i = 2; $i <= (int)sqrt($num); ++$i) {
            if ($num % $i === 0) {
                return false;
            }
        }
    }
    return true;
}
