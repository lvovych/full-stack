<?php
//11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).

$day = mt_rand(1,7);

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
    default:
        break;
}