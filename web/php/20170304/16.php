<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 12:22
 */
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9


$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
    if ($value%3 === 0 ) {
        echo "{$value}<br>";
    }
    else {
        echo $value, ', ';
    }


}