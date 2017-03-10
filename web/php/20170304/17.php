<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 12:25
 */
//Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
//$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

$date = new DateTime();
$months = [];
for($i=1; $i<13; $i++){
    $months[] = $date->format('F');
    $date->modify('+1 month');
}

foreach ($months as $month) {
    if ($month === date('F')) {
        echo "<strong>{$month}</strong></br>";
    }
    else {
        echo "{$month}</br>";
    }

}











