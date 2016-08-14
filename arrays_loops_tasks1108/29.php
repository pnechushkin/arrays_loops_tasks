<?php
$arr=array(
    array(10, 7, 6),
    array(4, 5),
    array(3, 2, 1, 0)
            );
echo 'Исходный масив:';
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'Сортировка по количеству вложеных значений:';
asort($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'Сортировка по сумме значений:<br/>';

foreach ($arr as $val)
{
    $tmparr[]=(array_sum($val));
}
asort($tmparr);
$arrs = array();
foreach ($tmparr as $k=>$v)
{
    $arrs[]=$arr{$k};
}
echo '<pre>';
print_r($arrs);
echo '</pre>';