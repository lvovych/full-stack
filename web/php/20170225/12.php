<?php

//12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).


$day = mt_rand(1,10);
//var_dump($day);

switch ($day) {
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    case ($day <1 || $day > 7):
        echo "Неизвестный день";
        break;
}


