<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:48
 */

//Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.

$n = 1000;
$num = null;


while ($n >= 50) {
    $n = $n / 2;
    ++$num;
}

echo 'оличество итераций: ', $num;