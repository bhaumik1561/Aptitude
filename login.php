
<?php
         session_start();
            $con = new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
            $sql="select * from users";
             $q=$con->query($sql);
             extract($_POST);
             $flag=$q->rowcount();
		while($r=$q->fetch(PDO::FETCH_OBJ)){
			if($r->username==$nm&&($r->password==$pass))
                        {   
                           if($r->percentile==0)
                           { 
                             $_SESSION['id']=$r->userid;
                              $_SESSION['unm']=$r->username;
                                $_SESSION['nm']=$r->name;
                              $_SESSION['phone']=$r->phone;
                               $_SESSION['city']=$r->city; 
                             $sql="insert into back (userid,value) values ('$r->userid','0')";
                               $con->query($sql);
                               header("location:newlogin.php");
                               
                             }
                             else
                             {   
                                 $_SESSION['nm']=$r->name;
                              $_SESSION['phone']=$r->phone;
                               $_SESSION['city']=$r->city;
                                $_SESSION['id']=$r->userid;
                                 $_SESSION['unm']=$r->username;
                                 $_SESSION['pt']=$r->percent;
                                  $_SESSION['pi']=$r->percentile;
                                    $_SESSION['q']=$r->qoruq;
                               header("location:finish.php");
                             }
                           }
                       else
                         {$flag--;}
                        
		}
           if((--$flag)==-1)
           {        header("location:index.php?msg=Invalid username or password");}
?>
