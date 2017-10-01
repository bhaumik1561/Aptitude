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
<table>
<th colspan='10'>
LOGICAL REASONING RANK TABLE
</th>
<tr>
<td colspan='2'>
Rank 
</td>
<td colspan='2'>
USERID
</td>
<td colspan='2'>
NAME
</td>
<td colspan='2'>
TEST NAME:
</td>
<td colspan='2'>
SCORE:
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from result');
$x=0;
while($r=$q->fetch(PDO::FETCH_OBJ))
{
if($r->test=="logical reasoning")
{
$a[$r->percent]=$r->test;
$arr[$r->userid]=$r->percent;
$arrr[$r->userid][$r->percent]=$r->name;
}
}
arsort($arr);
ksort($a);
foreach($arr as $var=>$element)
{$x++;
 echo "<tr><td colspan='2'>".$x."</td><td colspan='2'>".$var."</td><td colspan='2'>".$arrr[$var][$element]."</td><td colspan='2'>".$a[$element]."</td><td colspan='2' align='center'>".$element."</td></tr>";
}
?>
</table>




<table>
<th colspan='10'>
VERBAL REASONING RANK TABLE
</th>
<tr>
<td colspan='2'>
Rank 
</td>
<td colspan='2'>
USERID
</td>
<td colspan='2'>
NAME
</td>
<td colspan='2'>
TEST NAME:
</td>
<td colspan='2' align='center'>
SCORE:
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from result');
$x=0;
$arr2=array();$a2=array();
while($r=$q->fetch(PDO::FETCH_OBJ))
{
if($r->test=="verbal reasoning")
{
$a2[$r->percent]=$r->test;
$arr2[$r->userid]=$r->percent;
$arrr2[$r->userid][$r->percent]=$r->name;
}
}
arsort($arr2);
ksort($a2);
foreach($arr2 as $var=>$element)
{$x++;
 echo "<tr><td colspan='2'>".$x."</td><td colspan='2'>".$var."</td><td colspan='2'>".$arrr2[$var][$element]."</td><td colspan='2'>".$a2[$element]."</td><td colspan='2' align='center'>".$element."</td></tr>";
}
?>
</table>



<table>
<th colspan='10'>
QUANTITATIVE REASONING RANK TABLE
</th>
<tr>
<td colspan='2'>
Rank 
</td>
<td colspan='2'>
USERID
</td>
<td colspan='2'>
NAME
</td>
<td colspan='2'>
TEST NAME:
</td>
<td colspan='2'>
SCORE:
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from result');
$x=0;$arr1=array();$a1=array();
while($r=$q->fetch(PDO::FETCH_OBJ))
{
if($r->test=="quantitative reasoning")
{
$a1[$r->percent]=$r->test;
$arr1[$r->userid]=$r->percent;$arrr1[$r->userid][$r->percent]=$r->name;
}
}
arsort($arr1);
ksort($a1);
foreach($arr1 as $var=>$element)
{$x++;
 echo "<tr><td colspan='2'>".$x."</td><td colspan='2'>".$var."</td><td colspan='2'>".$arrr1[$var][$element]."</td><td colspan='2'>".$a1[$element]."</td><td colspan='2' align='center'>".$element."</td></tr>";
}
?>
</table>
</div>
</div>
