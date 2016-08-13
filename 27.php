<?php
$row=30;
$cols=50;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<table>
    <? for ($i=0; $i<$row; $i++) :?>
    <tr>
        <? for ($j=0; $j<$cols; $j++) :
            $coun=count($colors)-1;
            $key =rand(0,$coun);
            $color=$colors[$key]; ?>
        <td bgcolor="<?= $color ?>"><?= rand(0,1000);?></td>
        <?  endfor; ?>
    </tr>
    <?  endfor; ?>
</table>
</body>
</html>
