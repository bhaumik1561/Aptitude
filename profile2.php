
<?php
session_start();
if(isset($_SESSION['unm']))
{}
else
{header("location:index.php");
}

?>
<style>
table {
    border-collapse: collapse;
    margin-bottom: 2em;
    width: 70%;
    background: #fff;
}
td {
    padding: 0.75em 0.75em;
    text-align: center;
     
}
 th {
    padding: 0.75em 0.75em;
    text-align: left;
     text-transform: capitalize;
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
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
   
}
nav li {
    display: inline;
    
    margin: 0 5px 0 0;
}
nav li a {
    padding: 100px 180px;
}


#header li {
    float: left;
    border: 1px solid;
    border-bottom-width: 0;
    margin: 0 5px 0 0;
}
#content {
 <!--   border: 1px solid; -->
    clear: both;
}
h1 {
    margin: 0;
    padding: 0 0 10px 0;
}
#selected {
    position: relative;
    top: 1px;
    background: orange;
}
.u-form-group button{
  width:10%;
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
<header> 
<nav>		
    <ul>
        <li><a href="finish.php">RESULT</a></li>
        <li  id="selected"><a href="profile2.php">PROFILE</a></li>
        <li ><a href="index.php">SIGNOUT</a></li>
    </ul>
</nav>

</header>

<section id="content">

<div style="margin:auto;width:90%;height:1000px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">

<table>
<th align="left"  colspan='8'>
<?php $unm=$_SESSION['unm']; echo "$unm " ?>
</th>
<tr>
<td >
ID No.
</td>
<td>
<?php
$id=$_SESSION['id'];
echo $id;
?>
</td>
</tr>
<tr>
<td >
NAME
</td>
<td>
<?php
echo $_SESSION['nm'];
?>
</td>
</tr>
<tr>
<td>
PHONE NO.:
</td>
<td>
<?php
echo $_SESSION['phone'];
?>
</td>
</tr>
<tr>
<td >
CITY:
</td>
<td>
<?php
echo $_SESSION['city'];
?>
</td>
</tr>
<tr>
<td>
TEST STATUS:
</td>
<td>
GIVEN
</td>
</tr>
</table>
</div>
</div>
</section>