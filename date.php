<?php
session_start();
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');

$sql="select * from test_date";
$q=$con->query($sql);
date_default_timezone_set('Asia/Kolkata');
$today=date("Y-m-d h:m:s",time());
$r=$q->fetch(PDO::FETCH_OBJ);
$t=time();
$testdate=strtotime($r->date);
$current=time();
$r=$q->fetch(PDO::FETCH_OBJ);
$r=$q->fetch(PDO::FETCH_OBJ);
$expirydate=strtotime($r->date);
if($testdate<$current&&$expirydate>$current)
{header("location:begin2.php");}
else if($expirydate<$current)
{
echo '<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left"><div style="margin-left:20%;padding-top:5%"><p class="style7"><p class="style7">Test time expired <a href="newlogin.php">Go Back to home page</a></p>';
}
else
{echo '<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left"><div style="margin-left:20%;padding-top:5%"><p class="style7"><p class="style7">Test is not started yet...<a href="newlogin.php">Go Back to home page</a></p>';}
?>

