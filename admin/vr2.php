<table>

<th>
VERBAL REASONING
</th>
<tr>
<td>
id
</td>
<td>
Question
</td>
</tr>

<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_vr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ)){
  
			
			echo "<tr><td>".$r->id."</td><td>".$r->question."</td><td></td></tr><br>";


}

?>

</table>

