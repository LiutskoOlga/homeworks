<?php
/**
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений
 * какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
 * 442158755745 встречается 4 раза.</p>
 */
$str   = '442158755745';
$i     = 0;
$value = 5;
$count = 0;
while ($i < strlen($str)) {
    if ($str[$i] == $value) {
        $count++;
    }
    $i++;
}
echo $count;