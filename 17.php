<?php
$arr=array('January','February','March','April','May','June','July','August','September','October','November','December');
$month=date('F');
foreach ($arr as $value)
{
    if ($value == $month) { echo '<strong>'.$value.'</strong></br>';}
    else
    echo $value.'</br>';
}
