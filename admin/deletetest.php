<p align="right">
<strong><a href="handletest.php"> Back </a>|

<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<style>
h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}

table {
    border-collapse: collapse;
    margin-bottom: 2em;
    width: 90%;
    background: #fff;
}
td, th {
    padding: 0.75em 1.5em;
    text-align: center;
}
	td.err {
		background-color: #e992b9;
		color: #fff;
		font-size: 0.75em;
		text-align: center;
		line-height: 1;
	}
th {
    background-color: #31bc86;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
}
tbody th {
	background-color: #2ea879;
}
tbody tr:nth-child(2n-1) {
    background-color: #f5f5f5;
    transition: all .125s ease-in-out;
}
tbody tr:hover {
    background-color: rgba(129,208,177,.3);
}
</style>
<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>

<form method="post" action="deletetest.php" >
<table>
<tr>
      <td ><strong>Select Test Name </strong></td> 
      <td><select name="topic" >
      <option value="logical_reasoning">logical reasoning</option>
      <option value="verbal_reasoning">verbal reasoning</option>
      <option value="quantitative_reasoning">quantitative reasoning</option>
      </select>
       </td>
       <td> <input type="submit"></td>

       </tr>

</table>
</form>
<?php if(isset($_POST['topic'])):?>
<?php if ($_POST['topic']=="logical_reasoning"): ?>

<form action="dt.php" method="post">
<table>

<th>
LOGICAL REASONING
</th>
<tr>
<td>
id
</td>
<td>
Question
</td>
<td colspan='2'>
select :
</td>
</tr>

<?php
session_start();
$_SESSION['topic1']="test_lr";
$_SESSION['topic2']="logical_reasoning";
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_lr";
$query=$con->query($sql);
$n=0;
while($r=$query->fetch(PDO::FETCH_OBJ)){
  
			
			echo "<tr><td>".$r->id."</td><td>".$r->question."</td><td></td><td><input type='checkbox' name='".$r->id."' ></td></tr><br>";


}

?>

</table>
<input type="submit" value="GO">
</form>
<!-- 
<?php elseif ($_POST['topic']=="verbal_reasoning"): ?>

<form action="dt.php" method="post">
<table>

<th>
VERBAL REASONING
</th>
<tr>
<td>
id
</td>
<td colspan='15'>
question
</td>
<td colspan='2'>
select :
</td>
</tr>

<?php
session_start();
$_SESSION['topic1']="test_vr";
$_SESSION['topic2']="verbal_reasoning";
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_vr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ)){
  
			
			echo "<tr><td>".$r->id."</td><td colspan='15'>".$r->question."</td><td colspan='2'><input type='checkbox' name='".$r->id."' ></td></tr><br>";


}

?>
</table>

<input type="submit" value="GO">
</form>

<?php else :?>

<form action="dt.php" method="post">
<table>

<th>
QUANTITATIVE REASONING
</th>
<tr>
<td>
id
</td>
<td colspan='15'>
question
</td>
<td colspan='2'>
select :
</td>
</tr>

<?php
session_start();
$_SESSION['topic1']="test_qr";
$_SESSION['topic2']="quantitative_reasoning";
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_qr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ))
{		
			echo "<tr><td>".$r->id."</td><td colspan='15'>".$r->question."</td><td colspan='2'><input type='checkbox' name='".$r->id."' ></td></tr><br>";

}

?>

</table>
<input type="submit" value="GO">
</form>
<?php endif; ?>

<?php endif; ?>