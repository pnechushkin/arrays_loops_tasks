<?php
//Возможно не правильно понял задание. Почему просто нельзя использывать count($arr)?
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count=0;
foreach ($arr as $value)
{
    $count+=1;
}
echo $count;

