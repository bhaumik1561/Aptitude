<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>

<style>
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





<?php
session_start();
if(!isset($_SESSION['id']))
{header("location:index.php");}
$id=$_SESSION['id'];
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql ="update back set value=2 WHERE userid='$id'";
$q=$con->query($sql);
?>
<div style="margin:auto;width:90%;height:1800px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<br>
To know result of whether you are qualified or not check your
<?php $con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
 $sql="select * from test_date";
$q=$con->query($sql);
$r=$q->fetch(PDO::FETCH_OBJ);
$r=$q->fetch(PDO::FETCH_OBJ);
$day=substr($r->date,8,2);
$month=substr($r->date,5,2);
$year=substr($r->date,0,4);
$hour=substr($r->date,11,2);
$minute=substr($r->date,14,2);
$second=substr($r->date,17,2);
echo $day."-".$month."-".$year." at ".$hour.":".$minute.":".$second;
 ?> .
<br>
<br>
<?php
$id=$_SESSION['id'];
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$topic=$_SESSION['topic'];
$count=0;$count1=0;
$sql="select * from $topic";
$q=$con->query($sql);
$tot=0;
for($x=1;$x<100;$x++)
{
if(isset($_POST[$x]))
{ 
  $sql="select * from test_lr where id='$x'";
 
  $q=$con->query($sql);
   $s=$q->fetch(PDO::FETCH_ASSOC);
  $response=$_POST[$x];
  if($s['answer']==$response)
   {$count++;$count1++;}
 
}

}
$sql="select * from test_lr";
$q=$con->query($sql);
 $c1=$q->rowcount();





echo "LOGICAL REASONING :".$count."/".($c1)."<br>";
$x1=$count/($c1)*100;
$unm=$_SESSION['unm'];
$tn=$_SESSION['topicname'];
$sql="insert into result (userid,name,test,percent) values ('$id','$unm','$tn','$x1')";

$q=$con->query($sql);



$topic1=$_SESSION['topic1'];
$count1=0;
$sql="select * from $topic1";
$q=$con->query($sql);
for($x=100;$x<=200;$x++)
{

if(isset($_POST[$x]))
{ 
  $x=$x-100;
  $sql="select * from test_vr where id='$x'";
  $x=$x+100;
  $q=$con->query($sql);
   $s=$q->fetch(PDO::FETCH_ASSOC);
  $response=$_POST[$x];
  if($s['answer']==$response)
   {$count++;$count1++;}
 
}
}
$sql="select * from test_vr";
$q=$con->query($sql);
 $c2=$q->rowcount();


echo "VERBAL REASONING :".$count1."/".($c2)."<br>";
$x1=$count1/($c2)*100;
$tn=$_SESSION['topicname1'];
$sql="insert into result (userid,name,test,percent) values ('$id','$unm','$tn','$x1')";
$q=$con->query($sql);



$topic2=$_SESSION['topic2'];
$sql="select * from $topic2";
$count2=0;
$q=$con->query($sql);


for($x=200;$x<=300;$x++)
{

if(isset($_POST[$x]))
{ $x=$x-200;
  $sql="select * from test_qr where id='$x'";
  $x=$x+200;
  $q=$con->query($sql);
   $s=$q->fetch(PDO::FETCH_ASSOC);
  $response=$_POST[$x];
  if($s['answer']==$response)
   {$count++;$count2++;}
 
}


}
$sql="select * from test_qr";
$q=$con->query($sql);
$c3=$q->rowcount();


$x=$c1+$c2+$c3+1;

echo "QUANTITATIVE REASONING :".$count2."/".($c3)."<br>";
$x1=$count2/($c3)*100;
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
$temp=0;$temp2=0;
foreach($arr as $var=>$element)
{$x++;

if($temp==$element)
{$y=$temp2;}
else
{

$y=($tot-$x)*100/($tot-1);

if($x==1)
$y=($tot-$x+0.9999)*100/$tot;


if($x==$tot)
$y=($tot-$x+0.0001)*100/$tot;

}

$sql = "UPDATE users SET percentile='$y' WHERE userid='$var'";
$con->query($sql);
$temp=$element;
$temp2=$y;
}
?>
<table border='1'>
<tr>
<td>
Question no.
</td>
<td>
CORRECT ANSWER
</td>
<td>
YOUR RESPONSE
</td>
<td>
RESULT
</td>
</tr>
<?php
$tot=1;
 $sql="select * from test_lr";
 
  $q=$con->query($sql);
    while($r=$q->fetch(PDO::FETCH_ASSOC))
     {     
       if(isset($_POST[$r['id']])) 
       {    if($_POST[$r['id']]==$r['answer'])
             {$result="correct";}
             else
             {$result="incorrect";}
           $res=$_POST[$r['id']];
           echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td>".$r[$res]."</td><td>$result</td></tr>";
        }
        else
        {echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td></td><td>NOT ATTEMPTED</td></tr>";
        }
        $tot++;

      }
$sql="select * from test_vr";
 
  $q=$con->query($sql);
    while($r=$q->fetch(PDO::FETCH_ASSOC))
      {     $s=$r['id']+100;
      if(isset($_POST[$s])) 
       {    if($_POST[$s]==$r['answer'])
             {$result="correct";}
             else
             {$result="incorrect";}
           $res=$_POST[$s];
           echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td>".$r[$res]."</td><td>$result</td></tr>";
        }
        else
        {echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td></td><td>NOT ATTEMPTED</td></tr>";
        }
         $tot++;

      }
  $sql="select * from test_qr";
 
  $q=$con->query($sql);
    while($r=$q->fetch(PDO::FETCH_ASSOC))
     {     $s=$r['id']+200;
       if(isset($_POST[$s])) 
       {    if($_POST[$s]==$r['answer'])
             {$result="correct";}
             else
             {$result="incorrect";}
           $res=$_POST[$s];
           echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td>".$r[$res]."</td><td>$result</td></tr>";
        }
        else
        {echo "<tr><td>$tot</td><td>".$r[$r['answer']]."</td><td></td><td>NOT ATTEMPTED</td></tr>";
        }
          $tot++;

      }
    





$q=$con->query('select * from back where userid=0');
$r=$q->fetch(PDO::FETCH_ASSOC);
$co=$r['value'];


$q=$con->query('select * from users');
		   while($r=$q->fetch(PDO::FETCH_OBJ)){
		 	if(($r->percentile)>=($co))
	        	 {$sql="UPDATE users SET qoruq='QUALIFIED' WHERE username='$r->username'"; $con->query($sql);}
                        else
                         {$sql="UPDATE users SET qoruq='UNQUALIFIED' WHERE username='$r->username'"; $con->query($sql);}
                        
		 
                         }


?>
</table>
</div>
</div>