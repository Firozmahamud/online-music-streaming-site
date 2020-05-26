<?php
  require_once("session.php");
  sStart();
  if(!isset($_SESSION['userID']))
  {
    header('location:login.html');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="payment.css">
  </head>
  <body style="background-color:powderblue;">
  <table border="0" width="" height="80">
  <p style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;">payment via</p>
			<tr height="90">
    <div class="container">

 
                <td><a class="btn btn1" href="bkash.php" target="myFrame">bKash</a></td>
				<td><a class="btn btn4" href="visa.php" target="myFrame">visa or master card</a> </br></td>
				<td><a class="btn btn2"href="d.php" target="myFrame">credit or debit cards</a></td>
				<td><a class="btn btn3" href="i.php" target="myFrame"> internet banking</a></td>



			</tr>
			</div>
			<tr height="0px">
				<td colspan="4">
					<iframe style="width:1339px;height:450px"name="myFrame"></iframe>
				</td>
			</tr>
		</table>
	</body>
</html>