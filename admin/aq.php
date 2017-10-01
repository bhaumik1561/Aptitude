<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>



<?php
extract($_POST);

try{
if(!empty($question)&&(!empty($A))&&(!empty($B))&&(!empty($C))&&(!empty($D))&&(!empty($answer)))
{
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$A=addslashes($A);
$B=addslashes($B);
$C=addslashes($C);
$D=addslashes($D);
$question=addslashes($question);
$sql="INSERT INTO $topic (question,A,B,C,D,answer) VALUES ('$question','$A','$B','$C','$D','$answer')";
$r=$con->query($sql);
header("location:addque.php?msg=Question added successfully");
}
else
{
header("location:addque.php?msg=Fill all the fields of your question");
}
}
catch(PDOException $e)
{
echo "($topic,$question,$A,$B,$C,$D,$answer)";}
?>