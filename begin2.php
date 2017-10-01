<?php

session_start();

if(!isset($_SESSION['id']))
{header("location:index.php");}
 

$id=$_SESSION['id'];
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$sql="select * from back where userid='$id'";
 $q=$con->query($sql);
   $r=$q->fetch(PDO::FETCH_ASSOC);
  if($r['value']==2)
  {header("location:noway2.php");}
$sql ="update back set value=1 WHERE userid='$id'";
$q=$con->query($sql);

$v=1800+time();
if(!isset($_COOKIE['timer']))
{setcookie('timer',1800,$v);}
?>
<html>
<style text="text/css">
table{
position:absolute;
top:10%;
}


.u-form-group button{
  width:15%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}


</style>
<div  id="timer" align="right">
 <strong id="minutes">-</strong> minutes and <strong id="seconds">-</strong> seconds 
</div>
<script>
function getCookie() {
    var name = "timer" + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') 
         c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function setCookie(cname, cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (1*30*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; ";
}


var time=getCookie();
   
  var start = Date.now(),
    mins = document.getElementById('minutes'),
    secs = document.getElementById('seconds'),
    timer;

var timeleft;
function countdown() {
  
  
    timeleft = Math.max(0, time - (Date.now() - start) / 1000),
      m = Math.floor(timeleft / 60),
      s = Math.floor(timeleft % 60);
  setCookie("timer",timeleft);
  mins.firstChild.nodeValue = m;
  secs.firstChild.nodeValue = s;

  if( timeleft == 0){ document.getElementById("myform").submit();clearInterval(timer);}
}

timer = setInterval(countdown, 200);

</script>

<form id='myform' action="final.php" method="post">
<div class="CSSTableGenerator" >
<table>
<th colspan='5'>
PART 1:LOGICAL REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>

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
      


			
			echo "<tr><td>".$x.".</td><td>".$s['question']."</td><td></td></tr><br>";
                         echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="A">A.'.$s['A'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="B">B.'.$s['B'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="C">C.'.$s['C'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="D">D.'.$s['D'].'<td></tr><br>';
	


}




$_SESSION['topic']="test_lr";
$_SESSION['topicname']="logical reasoning";
?>

<th colspan='5'>
PART 2:VERBAL REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>

<?php
$sql="select * from test_vr";
$query=$con->query($sql);


$a=null;
while($r=$query->fetch(PDO::FETCH_OBJ)){
$a[]=$r->id;

}

shuffle($a);

foreach($a as $key=>$value){
  $x=$x+1;
$sql="select * from test_vr where id='$value'";
                        $q=$con->query($sql);
                        	$s=$q->fetch(PDO::FETCH_ASSOC);
      

$value=100+$value;
			
			echo "<tr><td>".$x.".</td><td>".$s['question']."</td><td></td></tr><br>";
                         echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="A">A.'.$s['A'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="B">B.'.$s['B'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="C">C.'.$s['C'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="D">D.'.$s['D'].'<td></tr><br>';
	


}




$_SESSION['topic1']="test_vr";
$_SESSION['topicname1']="verbal reasoning";
?>


<th colspan='5'>
PART 3:QUANTITATIVE REASONING
</th>
<tr>
<td>
No.
</td>
<td align="center">
Question
</td>
</tr>



<?php
$sql="select * from test_qr";
$query=$con->query($sql);
$a=null;
while($r=$query->fetch(PDO::FETCH_OBJ)){
$a[]=$r->id;

}

shuffle($a);

foreach($a as $key=>$value){
  $x=$x+1;
$sql="select * from test_qr where id='$value'";
                        $q=$con->query($sql);
                        	$s=$q->fetch(PDO::FETCH_ASSOC);
      

$value=200+$value;
			
			echo "<tr><td>".$x.".</td><td>".$s['question']."</td><td></td></tr><br>";
                         echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="A">A.'.$s['A'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="B">B.'.$s['B'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="C">C.'.$s['C'].'</td></tr><br>';
			 echo '<tr><td></td><td><input type="radio" name="'.$value.'" value="D">D.'.$s['D'].'<td></tr><br>';
	


}


$_SESSION['topic2']="test_qr";$_SESSION['topicname2']="quantitative reasoning";
?>
<tr>
<td align="center" colspan='5'>
<div class="u-form-group">
        <button type="submit">Submit</button>
      </div>
</td>
</tr>
</table>

</form>
</html>