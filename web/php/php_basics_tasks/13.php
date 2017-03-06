<?php
//13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$length = 1688;
$time = 5;

$speed_per_h = (int)$length/(int)$time;
$speed_per_h = round($speed_per_h, 2);
$speed_per_m = ((int)$length * 1000)/((int)$time * 60);
$speed_per_m = round($speed_per_m, 2);
echo "скорость автомобиля на заданном участке:  {$speed_per_h} км/час;  {$speed_per_m} м/сек";

