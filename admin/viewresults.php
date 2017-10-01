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

</style>

<p align="right">
<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<div style="margin:auto;width:100%;height:1000px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<table>
<th colspan='8' >
RESULT TABLE
</th>
<tr>
<td >
No.
</td>
<td >
NAME
</td>
<td>
SCORE:
</td>
<td >
PERCENTILE:
</td>
<td>
Q/UQ:
</td>
</tr>

<?php
$con=new PDO('mysql:host=127.0.0.1;dbname=aptitude_test','root','');
$q=$con->query('select * from users');
$x=0;
while($r=$q->fetch(PDO::FETCH_OBJ))
{
$x++;

echo "<tr><td >".$x."</td><td >".$r->username."</td><td>".$r->percent."</td><td >".$r->percentile."</td><td >".$r->qoruq."</td></tr>";
}

?>