<?php
echo '
<table border="1"><tr>
<td align="center" width="30px"><strong>/</strong></td>
<td align="center" width="30px"><strong>1</strong></td>
<td align="center" width="30px"><strong>2</strong></td>
<td align="center" width="30px"><strong>3</strong></td>
<td align="center" width="30px"><strong>4</strong></td>
<td align="center" width="30px"><strong>5</strong></td>
<td align="center" width="30px"><strong>6</strong></td>
<td align="center" width="30px"><strong>7</strong></td>
<td align="center" width="30px"><strong>8</strong></td>
<td align="center" width="30px"><strong>9</strong></td>
</tr> ';
for ($i=1;$i<=9; $i++)
{echo '<td align="center" width="30px"><strong>'.$i.'</strong></td>';
    for ($j=1;$j<=9; $j++)
    {echo '<td align="center" width="30px">'.$i*$j.'</td>';}
echo '</tr> ';
}
echo '<table>';