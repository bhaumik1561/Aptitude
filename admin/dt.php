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
 
 $sql="DELETE FROM $topic1 WHERE id='$x'";
    $q=$con->query($sql);
    $flag=1;
}
}


if($flag==0)
{header("location:deletetest.php?msg=Please select one question");
}
if($flag==1)
 {header("location:deletetest.php?msg=Questions deleted successfully");}
?>