<?php

/**
 * 素数判定関数(true:素数,false:素数ではない)
 *
 * @param int $num
 * @return bool
 */
function isPrimeNumber(int $num): bool
{
    if ($num <= 1) {
        //1以下は素数ではない
        return false;

    } elseif ($num === 2) {
        //1の時は素数である
        return true;

    } else {
        //約数があるかを確認
        for ($i = 2; $i < $num; $i++) {

            if ($num % $i === 0) {
                return false;
            }

        }
    }
    return true;
}
