
<?php
for ($i = 0; $i <5; $i++) {
    $arr[] = rand(0,10);
}
$max=max($arr);
$min=min($arr);
foreach ($arr as $key=>$value)
{
    if ($value == $max) {$keymax=$key;echo $keymax.'sdf<br/>';}
    if ($value == $min) {$keymin=$key;echo $keymin.'sd<br/>';}

}
$arr[$keymax]=$min;
$arr[$keymin]=$max;
echo $max.'<br/>';
echo $min.'<br/>';
print_r($arr);

