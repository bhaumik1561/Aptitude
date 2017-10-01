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
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="createtest.php">Add Questions From Bank</a></p>
<p class="style7"><a href="deletetest.php">Delete Questions From Test</a></p>
<p class="style7"><a href="addtestque.php">Add Questions </a></p>
<p class="style7"><a href="ertestque.php">Edit/Remove Questions </a></p>
<p class="style7"><a href="viewque.php">View all Questions</a></p>
<p class="style7"><a href="scheduletest.php">Schedule test</a></p>
</div>
</div>
