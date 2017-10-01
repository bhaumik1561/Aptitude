<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>



<p align="right">
<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<style>
h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}
</style>
<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>
<div style="margin:auto;width:90%;height:1000px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<form action="co.php" method="post">
ENTER CUT OFF : <input type="text" name="co" required> %
<input type="submit">
</form>