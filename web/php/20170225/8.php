<?php
//8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.

$age = 60;

if (is_int($age)===false || $age < 0) {
    echo "Неизвестный возраст";
}
elseif ( $age > 17 && $age < 60 ) {
        echo "Вам еще работать и работать";
}
elseif ( $age > 59 ){
        echo "Вам пора на пенсию";
}
elseif ( $age >=0 && $age <= 17 ) {
        echo "Вам еще рано работать";
}
