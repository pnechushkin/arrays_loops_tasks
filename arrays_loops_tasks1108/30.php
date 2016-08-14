<?php
$arr = array(4, 8, 1, 8, 4, 9, 0, 3, 5, 3, 1, 2, 6, 4, 9, 43, 42);

$t = true;
while ($t) {
    $t = false;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $temp = $arr[$i + 1];
            $arr[$i + 1] = $arr[$i];
            $arr[$i] = $temp;
            $t = true;
        }
    }
}

echo '<pre>';
print_r($arr);
echo '</pre>';