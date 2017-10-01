<?php
session_start();

if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}




$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$topic1=$_SESSION['topic1'];
$topic2=$_SESSION['topic2'];
$flag=0;
for($x=0;$x<100;$x++)
{
if(isset($_POST[$x]))
{
 
 $sql="select * from $topic2 where id='$x'";
    $q=$con->query($sql);
    $r=$q->fetch(PDO::FETCH_OBJ);
$question=addslashes($question);
$A=addslashes($A);
$B=addslashes($B);
$C=addslashes($C);
$D=addslashes($D);
 $sql="select * from $topic1";
$q=$con->query($sql);
 $i=$q->rowcount();
$i++;


    $sql="INSERT INTO $topic1 (id,question,A,B,C,D,answer) VALUES ('$i','$r->question','$r->A','$r->B','$r->C','$r->D','$r->answer')";
   
    $r=$con->query($sql);
     $flag=1;
}
}


if($flag==0)
{header("location:createtest.php?msg=Please add one question");
}
if($flag==1)
 {header("location:createtest.php?msg=Questions added successfully");}
?>