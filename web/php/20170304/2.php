<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:17
 */

//Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

$arr = [1, 20, 15, 17, 24, 35];
$result = null;
foreach ($arr as $item) {
    $result += $item;
}

echo 'Result = ', $result, '<br>';