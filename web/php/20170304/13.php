<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:51
 */
//Вывести таблицу умножения

$html = '<table border="1">';
for ($i = 1; $i <= 10; $i++) {
    $html .= '<tr>';
    $y = 1;
    while ($y <=10) {
        $res = $i * $y;
        $html .= "<td>{$y} X {$i} = {$res}</td>";
        $y++;
    }
    $html .= '</tr>';
}
$html .= '</table>';

echo $html;