<!--<form action="from.php" method="post">

<?php
for($x=0;$x<5;$x++)
{
echo '<input type="checkbox" name="'.$x.'">';
}
echo '<input type="submit">';
?>


<?php
for($x=0;$x<5;$x++){
if(isset($_POST[$x]))
{
echo $x;
}
}
?>
</form>
-->
<!--
<form action="from.php" method="post">
<?php
for($x=0;$x<5;$x++)
{
echo '<input type="radio" name="'.$x.'" value="A">';
echo '<input type="radio" name="'.$x.'" value="B">';
echo '<input type="radio" name="'.$x.'" value="C">';
echo '<input type="radio" name="'.$x.'" value="D">';
}
echo '<input type="submit">';
?>


<?php
for($x=0;$x<5;$x++){
if(isset($_POST[$x]))
{
echo $_POST[$x];
}
}
?>
-->

<!--
<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from users');
$tot=$q->rowcount();
$x=0;
while($r=$q->fetch(PDO::FETCH_OBJ))
{

$arr[$r->name]=$r->percent;

}
arsort($arr);

foreach($arr as $var=>$element)
{$x++;

$y=($tot-$x+0.99)*100/$tot;


if($x==1)
$y=($tot-$x+0.9999)*100/$tot;

if($x==$tot)
$y=($tot-$x+0.0001)*100/$tot;

$sql = "UPDATE users SET percentile='$y' WHERE name='$var'";
$con->query($sql);

// echo " ".$x." ".$var." ".$element." ".$y."<br>";
}
?>
-->

<form action="from2.php" method="post">
<?php

$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from test_lr";
$query=$con->query($sql);
$x=0;

while($r=$query->fetch(PDO::FETCH_OBJ)){
$a[]=$r->id;

}

shuffle($a);

foreach($a as $key=>$value){
  $x=$x+1;
$sql="select * from test_lr where id='$value'";
                        $q=$con->query($sql);
                        	$s=$q->fetch(PDO::FETCH_ASSOC);
      
echo "<br><br>";
$value=100+$value;
			
			echo "<tr><td>".$x.".</td><td>".$s['question']."</td><td></td></tr><br>";
                         echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="A">A.'.$s['A'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="B">B.'.$s['B'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="C">C.'.$s['C'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="D">D.'.$s['D'].'<td></tr><br>';
	


}
?>
<input type="submit">
</form>