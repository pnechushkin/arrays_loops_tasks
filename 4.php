<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo 'values<br/>';
foreach ($arr as $value)
{
  echo $value.'<br/>';
}
echo '<br/>keys<br/>';
foreach ($arr as $key=>$value)
{
    echo $key.'<br/>';
}