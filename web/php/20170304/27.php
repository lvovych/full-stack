<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 19:40
 */
/*
 * Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$row = 4;
$cols = 5;

$colors = array('red','yellow','blue','gray','maroon','brown','green');

$html = '<table border="1">';
for ($i = 1; $i <= $row; $i++) {
    $html .= '<tr>';
    $y = 1;
    while ($y <=$cols) {
        $res = rand(1,10000);
        $html .= "<td bgcolor='{$colors[rand(0,6)]}'>$res</td>";
        $y++;
    }
    $html .= '</tr>';
}
$html .= '</table>';

echo $html;