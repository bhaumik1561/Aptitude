<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>

<?php
session_start();
if(!isset($_SESSION['unm']))
{header("location:index.php");}
?>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$topic=$_SESSION['topic'];
$count=0;
$sql="select * from $topic";
$q=$con->query($sql);
for($x=1;$x<100&&($r=$q->fetch(PDO::FETCH_OBJ));$x++)
{

if(isset($_POST[$x]))
{
   $response=$_POST[$x];
  if($r->answer==$response)
   {$count++;}

}


}
echo "YOUR SCORE IS ".$count." OUT OF ".($x-1);
$x=$count/($x-1)*100;
$unm=$_SESSION['unm'];
$tn=$_SESSION['topicname'];
$sql="insert into result (name,test,percent) values ('$unm','$tn','$x')";

$q=$con->query($sql);
?>
</div>
</div>