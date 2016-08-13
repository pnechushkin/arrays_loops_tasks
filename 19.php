<?php
$arr=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day=date('l');
foreach ($arr as $value)
{
    if ($value == $day)
    { echo '<i>'.$value.'</i></br>';}
    else
    {echo $value.'</br>';}
}