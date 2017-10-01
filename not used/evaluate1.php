<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>

<?php
session_start();
if(!isset($_SESSION['id']))
{header("location:index.php");}
?>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<?php
$id=$_SESSION['id'];
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

echo "LOGICAL REASONING :".$count."/".($x-1)."<br>";
$x1=$count/($x-1)*100;
$unm=$_SESSION['unm'];
$tn=$_SESSION['topicname'];
$sql="insert into result (userid,name,test,percent) values ('$id','$unm','$tn','$x1')";

$q=$con->query($sql);



$topic1=$_SESSION['topic1'];
$count1=0;$x1=0;
$sql="select * from $topic1";
$q=$con->query($sql);
for(;$x<100&&($r=$q->fetch(PDO::FETCH_OBJ));$x++)
{
$x1++;
if(isset($_POST[$x]))
{
   $response=$_POST[$x];
  if($r->answer==$response)
   {$count++;$count1++;}

}


}



echo "VERBAL REASONING :".$count1."/".($x1)."<br>";
$x1=$count1/($x1)*100;
$tn=$_SESSION['topicname1'];
$sql="insert into result (userid,name,test,percent) values ('$id','$unm','$tn','$x1')";
$q=$con->query($sql);



$topic2=$_SESSION['topic2'];
$sql="select * from $topic2";
$count2=0;$x1=0;
$q=$con->query($sql);
for(;$x<100&&($r=$q->fetch(PDO::FETCH_OBJ));$x++)
{
$x1++;
if(isset($_POST[$x]))
{
   $response=$_POST[$x];
  if($r->answer==$response)
   {$count++;$count2++;}

}


}




echo "QUANTITATIVE REASONING :".$count2."/".($x1)."<br>";
$x1=$count2/($x1)*100;
$tn=$_SESSION['topicname2'];
$sql="insert into result (userid,name,test,percent) values ('$id','$unm','$tn','$x1')";
$q=$con->query($sql);

echo "YOUR SCORE IS ".$count." OUT OF ".($x-1);
$x=$count/($x-1)*100;
$sql = "UPDATE users SET percent='$x' WHERE username='$unm'";

$q=$con->query($sql);


$q=$con->query('select * from users');
$tot=$q->rowcount();
$x=0;
while($r=$q->fetch(PDO::FETCH_OBJ))
{

$arr[$r->userid]=$r->percent;

}
arsort($arr);

foreach($arr as $var=>$element)
{$x++;

$y=($tot-$x)*100/$tot;


if($x==1)
$y=($tot-$x+0.9999)*100/$tot;

if($x==$tot)
$y=($tot-$x+0.0001)*100/$tot;

$sql = "UPDATE users SET percentile='$y' WHERE userid='$var'";
$con->query($sql);
$temp=$y;

}
?>
</div>
</div>