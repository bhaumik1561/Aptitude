<?php
session_start();
if(!isset($_SESSION['id']))
{header("location:index.php");}
$id=$_SESSION['id'];
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');

$sql="select * from back where userid='$id'";
 $q=$con->query($sql);
        $r=$q->fetch(PDO::FETCH_ASSOC);
  if($r['value']==1)
  {header("location:noway.php");}
?>







<style>
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
   
}
nav li {
    display: inline;
    
    margin: 0 5px 0 0;
}
nav li a {
    padding: 100px 180px;
}


#header li {
    float: left;
    border: 1px solid;
    border-bottom-width: 0;
    margin: 0 5px 0 0;
}
#content {
 <!--   border: 1px solid; -->
    clear: both;
}
h1 {
    margin: 0;
    padding: 0 0 10px 0;
}
#selected {
    position: relative;
    top: 1px;
    background: orange;
}
.u-form-group button{
  width:10%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}
</style>

<header> 
<nav>		
    <ul>
        <li id="selected"><a href="newlogin.php">HOME</a></li>
        <li ><a href="profile.php">PROFILE</a></li>
        <li ><a href="index.php">SIGNOUT</a></li>
    </ul>
</nav>

</header>

<section id="content">


<script>
</script>
<html>
<!--
<p align="right">
<strong><a href="index.php">Signout</a></strong>
</p>
-->
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<h1 style="color:darkblue">TAKE TEST</h1>
<br>
<br>
INSTRUCTIONS:<br><br><br>
1.Dont press back button while on going test.
<br>
<br>
2.Test consist of 3 sections.
<br>
<br>
3.Each question in each section is of 1 mark each.
<br><br>
4.No negative marking is there for wrong answer.

<br>
<br>
5.Test is scheduled on 
<?php $con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
 $sql="select * from test_date";
$q=$con->query($sql);
$r=$q->fetch(PDO::FETCH_OBJ);
$day=substr($r->date,8,2);
$month=substr($r->date,5,2);
$year=substr($r->date,0,4);
$hour=substr($r->date,11,2);
$minute=substr($r->date,14,2);
$second=substr($r->date,17,2);
echo $day."-".$month."-".$year." at ".$hour.":".$minute.":".$second;
 ?> .
<br>
<br>
<form action="date.php" method="post">
<div class="u-form-group">
<button  type="submit">BEGIN</button>
</form>
</div>
</div>
    <p><!-- Big lovely oodles of content --> </p>
<section>