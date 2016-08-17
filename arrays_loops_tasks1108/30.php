<?php
$arr = array(4, 8, 1, 8, 4, 9, 0, 3, 5, 3, 1, 2, 6, 4,40, 9, 43, 42);
$size = count($arr)-1;
for ($i = $size; $i>=0; $i--) {
    for ($j = 0; $j<=($i-1); $j++)
        if ($arr[$j]>$arr[$j+1]) {
            $k = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $k;
        }
}

echo '<pre>';
print_r($arr);
echo '</pre>';