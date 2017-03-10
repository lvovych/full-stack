<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 13:47
 */
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$date = new DateTime();
$day = date('l');
$weekdays = array();

for($i=0; $i<7; $i++){
    $weekdays[] = $date->format('l');
    $date->modify('+1 month');
}

foreach ($weekdays as $value) {
    if ($value === $day) {
        echo "<i>{$value}</i><br>";
    }
    else {
        echo $value, '<br>';
    }

}