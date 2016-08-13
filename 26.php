
<?php
for ($i = 0; $i <10; $i++) {
    $arr[] = rand(0,100);
}
$a=1;
$b=null;

foreach ($arr as $key=>$value)
{

    if ($value >0)
    {
        if ($key % 2==0) {$a=$value*$a;}
        else {$b.= 'Число с непарным индексом ['.$key.'] =>' .$value.'<br/>';}
    }
  }
echo 'Произведение тех элементов, которые больше ноля и у которых парные индексы = ' .$a. '<br/>';
echo $b;