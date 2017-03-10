<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:19
 */

//Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

$arr = [26, 17, 136, 12, 79, 15];

echo 'Array keys: <br>';
foreach ($arr as $key => $item) {
    echo $key, '<br>';
}

echo '<br>Array values: <br>';
foreach ($arr as $item) {
    echo $item, '<br>';
}