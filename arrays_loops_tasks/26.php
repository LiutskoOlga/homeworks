<?php
/**
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
 * индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
 * индекс.
 */

$min = rand(1, 50);
$max = rand(51, 100);
$arr = range($min, $max);
print_r($arr);
echo "</br>";
$multi = 1;

foreach ($arr as $k => $v) {
    if ($v > 0 && ($k % 2) == 0) {
        $multi *= $v;

    } elseif ($v > 0 && ($k % 2) != 0) {
        echo $v . "</br>";
    }
}

echo $multi;