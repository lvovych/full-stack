<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 18:45
 */

//Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.

$count = rand(0, 100);
$arr = [];
echo 'Array:<br>';

for ($i = 0; $i < $count; $i++) {
    $temp = rand(0, 10000);
    array_push($arr, $temp);
    echo "{$i} => {$temp} ; <br>";
}
$min = $max = 0;

for ($i=1; $i < $count; $i++) {
    if ($arr[$max] < $arr[$i]) {
        $max = $i;
    }
    if ($arr[$min] > $arr[$i]) {
        $min = $i;
    }
}
echo "<strong>Mix = {$arr[$min]}, Max = {$arr[$max]}</strong> <br> Result array: <br>";
$temp = $arr[$min];
$arr[$min] = $arr[$max];
$arr[$max] = $temp;


foreach ($arr as $i => $item) {
    echo "{$i} => {$item} ; <br>";
}