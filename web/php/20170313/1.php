<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 11/3/17
 * Time: 10:51
 */

/*
 * Создать форму с двумя элементами textarea.
 * При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 * */


$startHTML = <<<EOL
<html>
<body>
<form method="post">
    <span>$A: </span><input type="text" name="a">
    <span>$B: </span><input type="text" name="b">
    <input type="submit" value="Send">
</form>
</body>
</html>
EOL;

if (isset($_POST['a']) && isset($_POST['b'])) {

}
else {
    print_r($startHTML);
}

function getCommonWords ($a, $b) {

    $aWords = explode('', $a);
    $bWords = explode('', $b);

    return array($aWords, $bWords);

}