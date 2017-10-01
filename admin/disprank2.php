<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>
<style>
table {
  width: 100%;
  max-width: 600px;
  height: 320px;
  border-collapse: collapse;
  border: 1px solid #38678f;
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
  border-right: 1px solid #cccccc;
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

<p align="right">
<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<div style="margin:auto;width:90%;height:1000px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<table>
<th colspan='8'>
RANK TABLE
</th>
<tr>
<td >
Rank 
</td>
<td >
NAME
</td>
<td >
SCORE:
</td>
<td >
PERCENTILE:
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from users');
$x=0;
while($r=$q->fetch(PDO::FETCH_OBJ))
{

$arr[$r->name]=$r->percent;

}
arsort($arr);
foreach($arr as $var=>$element)
{$x++;
 $sql="select * from users where name='$var'";
 $q=$con->query($sql);
$r=$q->fetch();
 echo "<tr><td>".$x."</td><td>".$var."</td><td>".$element."</td><td>".$r['percentile']."</td></tr>";
}
?>
</table>


