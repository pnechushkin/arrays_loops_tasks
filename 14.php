<?php
$arr=array(4, 2, 5, 19, 13, 0, 10);
$a=0;
foreach ($arr as $value)
{
    if ($value==2||$value==3||$value==4)
    {$a=1;}
}
if ($a==1)
{echo 'Есть!<br/>'; }
else {echo 'Нет!<br/>';}