
<?php
session_start();
if(isset($_SESSION['unm']))
{}
else
{header("location:index.php");
}

?>
<style>
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
<header> 
<nav>		
    <ul>
        <li id="selected"><a href="finish.php">RESULT</a></li>
        <li ><a href="profile2.php">PROFILE</a></li>
        <li ><a href="index.php">SIGNOUT</a></li>
    </ul>
</nav>

</header>
<div style="margin:auto;width:90%;height:1000px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">

<table>
<th align="center" colspan='8'>
ONLINE APTITUDE RESULT
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
echo $_SESSION['unm'];
?>
</td>
</tr>
<tr>
<td>
SCORE:
</td>
<td>
<?php
echo $_SESSION['pt'];
?>
</td>
</tr>
<tr>
<td >
PERCENTILE:
</td>
<td>
<?php
echo $_SESSION['pi'];
?>
</td>
</tr>
<tr>
<td>
Q/UQ:
</td>
<td>
<?php
echo $_SESSION['q'];
?>
</td>
</tr>
</table>
</div>
</div>