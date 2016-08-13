<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    Введите любое целое число:<input name="val" type="text"><br>
    <input type="submit" VALUE="Go">
</form>
<?php
if ($_POST)
{
    $val=(int)$_POST['val'];
    $sum=0;
      if (strlen($_POST['val'])==strlen($val)) {$count=strlen($val);
          for ($i=0;$i<$count; $i++)
          {$sum+=$_POST['val'][$i];}
          echo 'Сумма чмсел '.$val.' = '.$sum;}
    else {
        echo '<span style="color: red;"><strong>Надо ввести целое число</strong></span>';
    }
}
 ?>
</body>
</html>

