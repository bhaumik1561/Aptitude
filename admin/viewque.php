<html>
<style text="text/css">
table{
position:absolute;
top:10%;left: 150px;
  width: 80%;

  height: 320px;
  
  margin: 50px auto;
  background: white;
}
th {
  background: steelblue;
  height: 54px;
  width: 25%;
  font-weight: lighter;
  text-shadow: 0 1px 0 #38678f;
  color: white;
  border: 1px solid #38678f; 
  box-shadow: inset 0px 1px 2px #568ebd;
  transition: all 0.2s;
}
tr {
  border-bottom: 1px solid #cccccc; 
}
tr:last-child {
  border-bottom: 0px;
}
td {
  
  padding: 10px;
  transition: all 0.2s;
}
td:last-child {
  border-right: 0px;
}
td.selected {
  background: #d7e4ef;
  z-index: ;
}
td input {
  font-size: 14px;
  background: none;
  outline: none;
  border: 0;
  display: table-cell;
  height: 100%;
  width: 100%;
}
td input:focus {
  box-shadow: 0 1px 0 steelblue;
  color: steelblue;
}


</style>
<body>
<p align="right">
<strong><a href="handletest.php"> Back </a>|

<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>
<style>
h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}
</style>

<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>


<table>

<th colspan='6'>
LOGICAL REASONING
</th>
<tr>
<td>
id
</td>
<td>
question
</td>
</tr>

<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_lr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ)){
  
			
			echo "<tr><td>".$r->id."</td><td colspan='4'>".$r->question."</td><td></td></tr><br>";

			echo "<tr><td>Option A.</td><td colspan='4'>".$r->A."</td><td></td></tr><br>";
			echo "<tr><td>Option B.</td><td colspan='4'>".$r->B."</td><td></td></tr><br>";
			echo "<tr><td>Option C.</td><td colspan='4'>".$r->C."</td><td></td></tr><br>";
			echo "<tr><td>Option D.</td><td colspan='4'>".$r->D."</td><td></td></tr><br>";
echo "<tr><td>Answer :</td><td>".$r->answer."</td><td></td></tr><br>";

}
?>



<th colspan='6'>
VERBAL REASONING
</th>
<tr>
<td>
id
</td>
<td>
question
</td>
</tr>

<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_vr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ)){
  
			
			echo "<tr><td>".$r->id."</td><td colspan='4'>".$r->question."</td><td></td></tr><br>";
echo "<tr><td>Option A.</td><td>".$r->A."</td><td></td colspan='4'></tr><br>";
			echo "<tr><td>Option B.</td><td colspan='4'>".$r->B."</td><td></td></tr><br>";
			echo "<tr><td>Option C.</td><td colspan='4'>".$r->C."</td><td></td></tr><br>";
			echo "<tr><td>Option D.</td><td colspan='4'>".$r->D."</td><td></td></tr><br>";
echo "<tr><td>Answer :</td><td>".$r->answer."</td><td></td></tr><br>";



}

?>



<th colspan='6'>
QUANTITATIVE REASONING
</th>
<tr>
<td>
id
</td>
<td>
question
</td>
</tr>

<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_qr";
$query=$con->query($sql);

while($r=$query->fetch(PDO::FETCH_OBJ))
{		
			echo "<tr><td>".$r->id."</td><td colspan='4'>".$r->question."</td><td></td></tr><br>";
echo "<tr><td>Option A.</td><td colspan='4'>".$r->A."</td><td></td></tr><br>";
			echo "<tr><td>Option B.</td><td colspan='4'>".$r->B."</td><td></td></tr><br>";
			echo "<tr><td>Option C.</td><td colspan='4'>".$r->C."</td><td></td></tr><br>";
			echo "<tr><td>Option D.</td><td colspan='4'>".$r->D."</td><td></td></tr><br>";
echo "<tr><td>Answer :</td><td>".$r->answer."</td><td></td></tr><br>";


}

?>

</table>





</body>
</html>