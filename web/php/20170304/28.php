<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 19:44
 */
//Вывести таблицу умножения с помощью двух циклов for.

$html = '<table border="1">';
for ($i = 1; $i <= 10; $i++) {
    $html .= '<tr>';
    for ($y = 1; $y <= 10; $y++){
        $res = $i * $y;
        $html .= "<td>{$y} X {$i} = {$res}</td>";
    }

    $html .= '</tr>';
}
$html .= '</table>';

echo $html;