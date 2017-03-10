<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 13:17
 */
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$weekends = ['Saturday', 'Sunday'];
$date = new DateTime();
$weekdays = array();
for($i=0; $i<7; $i++){
    $weekdays[] = $date->format('l');
    $date->modify('+1 month');
}

foreach ($weekdays as $day) {
    if (array_search($day, $weekends, true) !== false) {
        echo "<strong>{$day}</strong><br>";
    }
    else {
        echo $day, '<br>';
    }

}

