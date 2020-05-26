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
<body style="background-color:powderblue;">

<p>

<p style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;">bKash payment steps
<br/><br/>

<p style="font-size:100%;font-family:courier;">
step 1:Dail *247#<br/><br/>
step 2:enter your ammount<br/><br/>
step 3:press "2" for payment<br/><br/>
step 4:then give our merchant number "017********"<br/><br/>
step 5:give counter no "1"<br/><br/>
step 6:give your pin to process your payment<br/>

<br/>


<p style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;">for verification give your TrxID
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="    TrxID" name="search">


	<input type="button" name="ipbutton" value="Confirm" /> <br>
				</td>
</P>

</p>



</p>

</body>


</html>