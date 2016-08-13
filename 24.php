<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    Введите любое целое число:<input name="val" type="text"><br><br>
    Введите любое целое число которое надо найти:<input name="val1" type="text"><br>
    <input type="submit" VALUE="Go">
</form>
<?php
if ($_POST) {
    $val = (int)$_POST['val'];
    $val1=(int)$_POST['val1'];
    $count = 0;
    if (empty($val)||empty($val1)) {exit("Поля не заполнены") ; }
   if (strlen($_POST['val'])<>strlen($val)) {exit("Поля заполнены не корректно") ; }
   if (strlen($_POST['val1'])<>strlen($val1)) {exit("Поля заполнены не корректно") ; }
if (strlen($_POST['val'])==strlen($val))
{
    for ($i = 0; $i < strlen($val); $i++) {
        $arr[] = $_POST['val'][$i];
    }
}
    if (in_array($val1, $arr)) {

        foreach ($arr as $value)
        {
            if ($value == $val1) { $count++;}

        }

    }
    if ($count <> 0) {echo 'Число ' . $val1 . ' найдено ' . $count . ' раз ';    }
    else {echo 'Число ' . $val1 . ' не найдено';   }
}
?>
</body>
</html>
