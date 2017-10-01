
<?php
session_start();
if(!isset($_SESSION['id']))
{header("location:index.php");}
?>

<form action="evaluate1.php" method="post">
<table>
<th colspan='5'>
PART 1:LOGICAL REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_lr";
$query=$con->query($sql);
$x=0;
while($r=$query->fetch(PDO::FETCH_OBJ)){
  $x=$x+1;
			
			echo "<tr><td>".$r->id."</td><td>".$r->question."</td><td></td></tr><br>";
                        echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="A">A.'.$r->A.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="B">B.'.$r->B.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="C">C.'.$r->C.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="D">D.'.$r->D.'<td></tr>';



}
$_SESSION['topic']="test_lr";
$_SESSION['topicname']="logical reasoning";
?>
</table>
<table>

<th colspan='5'>
PART 2:VERBAL REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>

<?php
$sql="select * from test_vr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ)){
  $x=$x+1;
			
			echo "<tr><td>".$r->id."</td><td>".$r->question."</td><td></td></tr><br>";
                        echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="A">A.'.$r->A.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="B">B.'.$r->B.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="C">C.'.$r->C.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="D">D.'.$r->D.'<td></tr>';


}
$_SESSION['topic1']="test_vr";
$_SESSION['topicname1']="verbal reasoning";
?>


<th colspan='5'>
PART 3:QUANTITATIVE REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>



<?php
$sql="select * from test_qr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ))
{		$x=$x+1;
			echo "<tr><td>".$r->id."</td><td>".$r->question."</td><td></td></tr><br>";
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="A">A.'.$r->A.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="B">B.'.$r->B.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="C">C.'.$r->C.'</td></tr>';
			echo '<tr><td></td><td><input type="radio" name="'.$x.'" value="D">D.'.$r->D.'<td></tr>';

}

$_SESSION['topic2']="test_qr";$_SESSION['topicname2']="quantitative reasoning";
?>
</table>
<input type="submit">
</form>
