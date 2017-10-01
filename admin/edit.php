
<?php
session_start();

if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}



extract($_POST);
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$topic=$_SESSION['topic'];
$qn=$_SESSION['qn'];
$sql = "UPDATE $topic SET question='$question' WHERE id='$qn'";
$con->query($sql);
$sql = "UPDATE $topic SET A='$A' WHERE id='$qn'";
$con->query($sql);
$sql = "UPDATE $topic SET B='$B' WHERE id='$qn'";
$con->query($sql);
$sql = "UPDATE $topic SET C='$C' WHERE id='$qn'";
$con->query($sql);
$sql = "UPDATE $topic SET D='$D' WHERE id='$qn'";
$con->query($sql);
$sql = "UPDATE $topic SET answer='$answer' WHERE id='$qn'";
$con->query($sql);

header("location:erque.php?msg=Question Edited Successfully");
?>