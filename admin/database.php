<?php
try{
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
       
             	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}          	
 catch(PDOException $e){
	     echo $e->getMessage();
	      die();
            }
       
?>