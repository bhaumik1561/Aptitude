<?php
extract($_POST);
$s=$dt." ".$dt2.":00";
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="UPDATE test_date SET date='$s' WHERE id=2 ";
$con->query($sql);

header("location:scheduleresults.php?msg=Result date and time set successfully");
?>