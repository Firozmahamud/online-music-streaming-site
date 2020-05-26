<?php
  require_once("session.php");
  sStart();
  if(!isset($_SESSION['userID']))
  {
    header('location:login.html');
  }
?>
<!DOCTYPE html>
<html>

<head>
<body style="background-color:powderblue;">
<p style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;">internet banking payment method
<br/><br/><br/><br/>





<p style="font-size:160%;text-align:center;font-family:courier;">
select card:

   <select value="0"selected placeholder="    TrxID">
   <option value="1">rocket</option>
   <option value="2">gpay</option>
   <option value="3" >ucash</option>
   </select>
   <br>&nbsp   &nbsp    &nbsp &nbsp  
A/C number:  <td><input type="text" name="" value="" /> </td>
<td><br/>

 &nbsp   &nbsp    &nbsp	Enter ammount:<td><input type="text" name="" value="" /> </td>
<td><br/>
  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp pin:  <td><input type="password" name="" value="" /> </td>
<br/>
<td>
	<input type="button" name="ipbutton" value=  "Submit" /> <br>
				</td>

</P>

</p>



</head>
</html>
