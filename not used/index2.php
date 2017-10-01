

<html>
<body>
<style>
h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}


body {
background-image: url("download.jpg");
background-repeat: no-repeat;
background-position: center center;}}

table {
width: 300px;
padding: 50px;
border: 20px solid #0088dd;}
table.example {
margin: 10px auto 10px auto;
}

</style>

<h3 align="center" style="color: red">
<?php 
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>


<form action="login.php" method="POST">
<table border=0 class="example">
  <tr>
  <td>
 <strong> Username:</strong> 
  </td>
  <td>
  <input type="text" name="nm"  placeholder="Enter Username" required>
  </td>
   </tr>
   <tr>
   <td>
  <strong>  Password:</strong>  </td>
    <td><input type="password" name="pass"  placeholder="Enter Password" required><br>
   </td>
   </tr>
   <tr>
    <td>
    <button type="submit">Login</button>
     </td>
    <td>
     <input type="reset" value="Reset" >
   </td>
    </tr>
    <tr>
     <td>
    <a href="register.php">New User</a>
    </td>
    </tr>
</table>
   </form>
</body>
</html>