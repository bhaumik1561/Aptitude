<html>
<body>
<p align="right">
<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>
<style>

table {
    border-collapse: collapse;
    margin-bottom: 2em;
    width: 90%;
    background: #fff;
}
td, th {
    padding: 0.75em 1.5em;
    text-align: center;
}
	td.err {
		background-color: #e992b9;
		color: #fff;
		font-size: 0.75em;
		text-align: center;
		line-height: 1;
	}
th {
    background-color: #31bc86;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
}
tbody th {
	background-color: #2ea879;
}
tbody tr:nth-child(2n-1) {
    background-color: #f5f5f5;
    transition: all .125s ease-in-out;
}
tbody tr:hover {
    background-color: rgba(129,208,177,.3);
}




h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}
</style>

<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>
<form method="post" action="ertestque.php" >

<table>
<tr>
      <td ><strong>Select Test Type: </strong></td> 
      <td><select name="topic" >
      <option value="test_lr">logical reasoning</option>
      <option value="test_vr">verbal reasoning</option>
      <option value="test_qr">quantitative reasoning</option>
      </select>
       </td>
       <td> <input type="submit"></td>

       </tr>

</table>
</form>
<form  method="post" action="action2.php">
<?php
   if(!isset($_SESSION['topic']))
   {}
  if(isset($_POST['topic']))
   { $t=$_POST['topic'];
     echo 'Enter question no. :<select  name="qn" >';
     $sql="select * from $t";
     $con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
       
        $q=$con->query($sql);


           while($r=$q->fetch(PDO::FETCH_OBJ))
           {
               echo "<option value='".$r->id."'>".$r->id."</option>";
            }
           echo '</select><br>Edit: <input type="radio" name="editdelete" value="edit"  required> Delete :<input type="radio" name="editdelete"  value="delete" required>';

     if($_POST['topic']=="test_qr")
     {$_SESSION['top']="test_qr";include("qr2.php");}
     elseif($_POST['topic']=="test_lr")
     {$_SESSION['top']="test_lr";include("lr2.php");}
     elseif($_POST['topic']=="test_vr")
     {$_SESSION['top']="test_vr";include("vr2.php");}
      
     echo '<input type="submit" >';
}
?>

</form>
</body>
</html>