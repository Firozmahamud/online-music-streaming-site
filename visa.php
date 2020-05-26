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
<p style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;">Visa or master card payment method
<br/><br/><br/><br/>

<p style="font-size:160%;text-align:center;font-family:courier;">
Card Holder name:  <td><input type="text" name="" value="" /> </td>
<td><br/>
&nbsp   &nbsp &nbsp   &nbspcard type:           <td><input type="text" name="" value="" /> </td>
<td><br/>
 &nbsp   &nbsp    &nbspcard number:  <td><input type="text" name="" value="" /> </td>
<td><br/>
  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp pin:<td><input type="password" name="" value="" /> </td>
<br/>
<td>
	<input type="button" name="ipbutton" value="Submit" /> <br>
				</td>

</P>

</p>



</head>
</html>
