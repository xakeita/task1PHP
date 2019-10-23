<?php

require_once 'func.php';

echo '数字を入力してください',PHP_EOL;
$number = (int)trim(fgets(STDIN));

if (isPrimeNumber($number)) {
    echo '素数である';
} else {
    echo '素数ではない';
}
