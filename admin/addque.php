<?php
session_start();
if(isset($_SESSION['login']))
{}
else
{header("location:index.php");}

?>


<p align="right">
<strong><a href="login.php"> Home </a>|
<strong><a href="index.php">Signout</a></strong>
</p>
<style>
h1, h2, h3, h4, h5, h6, h7
{
font-weight: normal;
}
</style>


<body>
<h3 align="center" style="color: red">
<?php 
  
  if(isset($_GET['msg']))
  { echo $_GET['msg'];}
?>
</h3>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<form name="form1" method="post" action="aq.php">
  <table width="80%"  border="1" align="center">
    <tr>
      <td width="24%" height="32"><div align="left"><strong>Select Test Type: </strong></div></td> 
      <td width="75%" height="32"><select name="topic" id="topic">
      <option value="logical_reasoning">logical reasoning</option>
      <option value="verbal_reasoning">verbal reasoning</option>
      <option value="quantitative_reasoning">quantitative reasoning</option>
      </select>
       </td>
       </tr>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
	    <td><textarea name="question" cols="60" rows="2" id="question"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter option A </strong></div></td>
   
      <td><input name="A" type="text" id="A" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter option B </strong></td>
      
      <td><input name="B" type="text" id="B" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter option C </strong></td>
 
      <td><input name="C" type="text" id="C" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter option D</strong></td>
 
      <td><input name="D" type="text" id="D" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
    
      <td><input name="answer" type="text" id="answer" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
     
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>

</div>
</body>