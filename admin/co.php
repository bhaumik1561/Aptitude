<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>



<?php
extract($_POST);
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query("UPDATE back SET value='$co' WHERE userid=0");
$q=$con->query('select * from users');

		   while($r=$q->fetch(PDO::FETCH_OBJ)){
		 	if(($r->percentile)>=($co))
	        	 {$sql="UPDATE users SET qoruq='QUALIFIED' WHERE username='$r->username'"; $con->query($sql);}
                        else
                         {$sql="UPDATE users SET qoruq='UNQUALIFIED' WHERE username='$r->username'"; $con->query($sql);}
                        
		 
                         }
header("location:setcutoff.php?msg=SUCCESSFUL SETTING OF CUTOFF"); 


?>

