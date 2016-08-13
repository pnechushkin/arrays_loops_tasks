<?php
if ($_POST) {
    $val = (int)$_POST['val'];
    $val1=(int)$_POST['val1'];
    $count = 0;
    for ($i = 0; $i < strlen($val); $i++) {
        $arr[] = $_POST['val'][$i];
        if ($_POST['val1']==$_POST['val'][$i]) {$count++;}
    }
     if ($count <> 0) {$mes= 'Число ' . $val1 . ' найдено ' . $count . ' раз ';    }
    else {$mes= 'Число ' . $val1 . ' не найдено';   }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body><div>
<form method="post">
    Введите любое целое число:<input type = "number" name="val" value="<?= rand(10000,1000000)?>"><br><br>
    Введите любое целое число которое надо найти:<input name="val1" type="number"value="<?= rand(0,10)?>"><br>
    <input type="submit" VALUE="Go">
    </div>
    <div><?=$mes;?></div>
</form>
</body>
</html>
