<form action="registered.php" method="POST">
<table border=1 colspan="5">
   <tr>
   <td colspan="5">
    *Required field
   </td>
   </tr>
 <tr>
  <td colspan=2>
  *Name:     
  </td>
  <td colspan=2>
  <input type="text" name="nm" required>
  </td>
  </tr> 

  <tr>
  <td colspan=2>
  *User Name:     
  </td>
  <td colspan=2>
  <input type="text" name="unm" required>
  </td>
   </tr>
   <tr>
   <td colspan=2>
    *Password:  </td>
    <td colspan=3><input type="password" name="pass" required>
   </td>
   </tr>
   <tr>
   <td colspan=2>
     *Reenter New Password:  </td>
    <td colspan=3>
    <input type="password" name="pass1" required>
   </td>
   </tr>
    <tr>
    <td>*Birth date: </td>
   <?php
   

    echo '<td><select name="sel1">';
    
     for($a=1;$a<=31;$a++)
     { echo "<option>$a</option>";}
    echo "</select></td>";
    
    echo '<td><select name="sel2">';
    
    for($a=1;$a<=12;$a++)
     { echo "<option> $a </option>";}
    
    echo "</select></td>";
    echo '<td><select name="sel3">';
    
     for($a=1947;$a<2016;$a++)
     { echo "<option> $a </option>";}
    
    echo '</select></td></tr>';
    ?>
   <tr>
   <td colspan=2>
     *Phone:  </td>
    <td colspan=3>
    <input type="text" name="phone" required>
   </td>
   </tr>
   <tr>
   <td colspan=2>
     City:  </td>
    <td colspan=3>
    <input type="text" name="city" required>
   </td>
   </tr>
    <tr>
    <td>
    <input type="submit" >
    </td>
    <td>
     <input type="reset" value="Reset" >
    </td>
    </tr>
   </table>
   </form>
