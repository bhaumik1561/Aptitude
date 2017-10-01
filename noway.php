
<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">

You pressed back button  so you are disqualified
<?php
session_start();
$id=$_SESSION['id'];
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
   
   $sql="DELETE FROM users WHERE userid='$id'";
   $con->query($sql);
 $sql1="DELETE FROM back WHERE userid='$id'";
   $con->query($sql1);
?>