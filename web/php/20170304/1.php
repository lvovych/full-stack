<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 11:01
 */

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.



$arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($arr as $item) {
    echo $item, '<br>';
}