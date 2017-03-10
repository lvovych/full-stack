<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:19
 */

//Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$arr = [26, 17, 136, 12, 79, 15];

$result = null;

foreach ($arr as $item) {
    $result += $item ** 2;
}

echo 'Result = ', $result, '<br>';