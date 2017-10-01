
<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_lr";$count=0;$count1=0;
$query=$con->query($sql);
for($x=100;$x<=200;$x++)
{

if(isset($_POST[$x]))
{ $x=$x-100;
  $sql="select * from test_lr where id='$x'";
  $x=$x+100;
  $q=$con->query($sql);
   $s=$q->fetch(PDO::FETCH_ASSOC);
  $response=$_POST[$x];
  if($s['answer']==$response)
   {$count++;$count1++;}
 
}


}

echo $count;
?>