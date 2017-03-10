<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:35
 */

//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//echo '-';

foreach ($arr as $key => $value) {
    if ($key === 0) {
        echo '-';
    }
    echo $value,'-';
}