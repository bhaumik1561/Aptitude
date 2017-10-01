<?php
session_start();
if(!isset($_SESSION['unm']))
{header("location:index.php");}
?>
<html>
<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>



<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><h1>TAKE TEST</h1></p>
<br>
<br>
<p class="style7"><a href="test1.php">LOGICAL REASONING</a></p>
<p class="style7"><a href="test2.php">VERBAL REASONING</a></p>
<p class="style7"><a href="test3.php">QUANTITATIVE REASONING</a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>