<?php
extract($_POST);
$s=$dt." ".$dt2.":00"; 
$s1=$dt3." ".$dt4.":00"; 

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="UPDATE test_date SET date='$s' WHERE id=1 ";
$con->query($sql);
$sql="UPDATE test_date SET date='$s1' WHERE id=3 ";
$con->query($sql);

header("location:scheduletest.php?msg=date and time set successfully")
?>