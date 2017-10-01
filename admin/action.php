<?php
session_start();
 $topic=$_SESSION['topic'];
    $qn=$_POST['qn'];
 if(isset($_POST['editdelete']))
 {if($_POST['editdelete']=='delete')
   { $con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
   
    $sql="DELETE FROM $topic WHERE id='$qn'";
      $q=$con->query($sql);
    if($q)
     {header("location:erque.php?msg=Question deleted successfully");}
   }
   elseif($_POST['editdelete']=='edit')
   { 
    $con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
     $_SESSION['qn']=$qn;
     $sql="select * from $topic where id='$qn'";
     $q=$con->query($sql);
     $r=$q->fetch(PDO::FETCH_OBJ);
        echo '<form method="post" action="edit.php"><table><tr><td height="52"><strong> Enter Question </strong></td><td><input type="text" name="question" size="100" id="question" value="'.$r->question.'"></td></tr><tr><td height="26"><strong>Enter option A </strong></td><td><input name="A" type="text" id="A" size="85" maxlength="85" value="'.$r->A.'"></td></tr><tr><td height="26"><strong>Enter option B </strong></td><td><input name="B" type="text" id="B" size="85" maxlength="85" value="'.$r->B.'"></td></tr><tr><td height="26"><strong>Enter option C </strong></td><td><input name="C" type="text" id="C" size="85" maxlength="85" value="'.$r->C.'"></td></tr><tr><td height="26"><strong>Enter option D</strong></td><td><input name="D" type="text" id="D" size="85" maxlength="85" value="'.$r->D.'"></td></tr><tr><td height="26"><strong>Enter True Answer </strong></td><td><input name="answer" type="text" id="answer" size="50" maxlength="50" value="'.$r->answer.'"></td></tr><tr><td height="26"></td><td><input type="submit" name="submit" value="Add" ></td></tr></table></form>';
}

}
?>