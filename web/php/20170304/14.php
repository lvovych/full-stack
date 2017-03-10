<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 12:04
 */

//Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.


$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [2, 3, 4];
$res = false;

foreach ($arr as $item) {
    if (array_search($item, $e, true) !== false ) {
        $res = true;
    }
}

if ($res) {
    echo 'Есть!';
}
else {
    echo 'Нет!';
}
