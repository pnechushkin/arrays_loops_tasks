<?php
$arr=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
foreach ($arr as $value)
{
    if ($value == 'Saturday'||$value == 'Sunday')
    { echo '<strong>'.$value.'</strong></br>';}
    else
    {echo $value.'</br>';}
}