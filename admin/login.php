<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>
<?php
session_start();
if(isset($_POST['lid'])&&isset($_POST['pass']))
{
extract($_POST); 	
include("database.php");
$sql="select * from admin where loginid=? and password=?";
$q=$con->prepare($sql);
$q->execute(array($lid,$pass));
$r=$q->fetch(PDO::FETCH_OBJ);
if($r->loginid==$lid&&$r->password==$pass)
{$_SESSION['login']=$lid;
}
else
{header("location:index.php?msg=invalid username or password");}
}
elseif(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>
<p class="head1">Welcome to Home Page , Admin ! </p>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="addque.php">Add Questions in Question Bank</a></p>
<p class="style7"><a href="erque.php">Edit/Remove Questions in Question Bank</a></p>

<p class="style7"><a href="handletest.php">Manage Test </a></p>
<p class="style7"><a href="scheduleresults.php">Schedule Result Date</a></p>
<p class="style7"><a href="disprank.php">Display Ranks</a></p>
<p class="style7"><a href="setcutoff.php">Set Cut-off</a></p>
<p class="style7"><a href="viewresults.php">View Results</a></p>

<p align="center" class="head1">&nbsp;</p>
</div>
</div>