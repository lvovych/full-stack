<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 16:45
 */
/*
Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/

$i = 1;

while ($i <=5) {
//    echo str_repeat("x", $i*2), '<br>';
    $y = 1;
    while ($y++ <= $i*2) {
        echo 'X';
    }
    echo '<br>';
    $i++;
}