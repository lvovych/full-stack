<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:28
 */

/*
 * Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green','red','blue'); $ru = array('зеленый', 'красный', 'голубой')
*/

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$en = [];
$ru = [];

foreach ($arr as $key => $value) {
    array_push($en, $key);
    array_push($ru, $value);
}

echo '$en : ';
print_r ($en);
echo '<br>$ru : ';
print_r ($ru);

