<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 16:23
 */
/*
 * Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
 * x
 * xx
 * xxx
 * xxxx
 * xxxxx
 */

for ($i = 1; $i <= 20; $i++) {
//    echo str_repeat("x", $i), '<br>';
    $y = 1;
    while ($y++ <= $i) {
        echo 'x';
    }
    echo '<br>';
}