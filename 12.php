<?php
$n = 1000;
$num=0;
while ($n>50)
{
    $n1=$n;
    $n/=2;
    $num+=1;
}
echo '$num = '. $num.'<br/>';
echo '$n1 = '. $n1;