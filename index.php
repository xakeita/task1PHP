<?php

require_once 'func.php';
$state = false;
if (isset($_GET['number'])) {
    $state = true;
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>素数判定</title>
</head>

<boby>
    <h1>素数判定</h1>
    <p>入力した数字が素数か素数でないかを判定します。</p>

    <form action="#" method="get">
        <input type="number" name="number">
        <input type="submit">
    </form>

    <?php if ($state): //入力状態がtrueのとき ?>
        <?php $number = (int)$_GET['number']; //入力された値を代入 ?>

        <h3>判定結果：

            <?php if (isPrimeNumber($number)): ?>
                <?php echo '素数である'; ?>
            <?php else: ?>
                <?php echo '素数でない'; ?>
            <?php endif; ?>

        </h3>

    <?php endif; ?>

</boby>
</html>
