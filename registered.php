
<?php
    session_start();
      if(strlen($_POST['pass'])<5||strlen($_POST['pass'])>15)
       { header("location:register1.php");$_SESSION['error']="Password must be in range from 5 to 15 characters";
        }
       else if($_POST['pass']!=$_POST['pass1'])
       { header("location:register1.php");$_SESSION['error']="Re-entered Password must be same as Password";
        }
       else if((preg_match('/[^a-z_\-0-9]/i', $_POST['pass'])))
         {header("location:register1.php");$_SESSION['error']="Password must be alphanumeric";
                  
           } 
         else if(!(preg_match('/^[\d]{10}$/', $_POST['phone'])))
         {header("location:register1.php");$_SESSION['error']="Enter valid phone number";
                  
           } 
        elseif(($_POST['vercode1'] != $_SESSION['vercode'] OR $_SESSION['vercode']=='')) 
        {$v=$_SESSION['vercode'];header("location:register1.php");$_SESSION['error']="Invlaid Captcha $v";
          
        } 
      else{ 
           
             extract($_POST);

         try{
              $con = new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
          	      
            
             	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);            	
          
       
           
            $sql="insert into users (name,username,password,phone,city) values ('$nm','$unm','$pass','$phone','$city')";
	     $query=$con->query($sql); 
            header("location:index.php?msg=You are registered....");
                  
             
          }
          catch(PDOException $e){
	     echo $e->getMessage();
	      die();
            }
  
        
       }

       
  
?>
