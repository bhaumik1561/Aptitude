<html>
<head>
<title>Administrative Login - Online Aptitude Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
    tab1 { padding-left: 4em; }
 .u-form-group button{
  position: relative;
  left: 69px;
  width:30%;
  background-color: #1CB94E;
 margin: 10px;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
 
  border-radius: 2px;
  text-transform: uppercase;
}

</style>
</head>
<body>

<?php

  
include("header.php");
?>

<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>
<p>
<h1 align="center" style="color: brown">Administrative Login</h1>
<p>
<form action="login.php" method="POST">
<table border=0>
<tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
    <td width="138"><table width="119" border="0" align="center">
  </tr>
</table>
<table>

  <tr>
  <td  width="106">
  <b> <tab1> Login Id:</tab1></b> 
  </td>
  <td >
  <input type="text" name="lid" required>
  </td>
   </tr>
   <tr>
   <td  width="132">
  <b><tab1>Password:</tab1> </b> </td>
    <td><input type="password" name="pass" required><br>
   </td>
   </tr>
</table>
    <div class="u-form-group"><button type="submit">LOGIN</button>
 
    <button type="reset">RESET</button>
  </div>

   </form>
</body>
</html>

