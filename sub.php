<?php
  require_once("session.php");
  sStart();
  if(!isset($_SESSION['userID']))
  {
    header('location:login.html');
  }
?>
<html>
<head> 

 <link rel="stylesheet" href="style.css">
 <link href="Main.css" rel="stylesheet"/>

<div class="custom-padding">
  <nav>
    <div class="logo">সারগাম‌</div>

    <ul class="menu-area">
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="sub.php">Subscription</a></li>
      <li><a href="social.php">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</div>


 <style type="text/css">
 
 body
{
	margin:0;
	padding:0;
	background:url("background.jpg");
	background-size:cover;
	font-family: sans-serif; 
 
background: #000;
}
.btn
{
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 width: 240px;
 height: 60px;
 text-align: center;
 line-height: 60px;
 color: #fff;
 font-size: 24px;
 text-transform: uppercase;
 text-decoration: none;
 font-family: sans-serif;
 box-sizing: border-box;
 background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
 background-size: 400%;
 border-radius: 30px;
 z-index: 1;
}
.btn:hover
{
 animation: animate 5s linear infinite;
}
@keyframes animate
{
 0%
 {
  background-position: 0%;
 }
 100%
 {
  background-position: 400%;
 }
}
.btn:before
{
 content: '';
 position: absolute;
 top: -5px;
 left: -5px;
 right: -5px;
 bottom: -5px;
 z-index: -1;
 background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
 background-size: 400%;
 border-radius: 40px;
 opacity: 0;
 transition: 0.5s;

 
}
.btn:hover:before
{
 
 filter: blur(20px);
 opacity:1;
 animation: animate 5s linear infinite;
} 
 
 </style> 
<title> subscribe </title>

</head>


<body>





<div style="font-size:160%;text-align:center;color:ForestGreen;font-family:courier;" >
<br/><br/><br/><br/><br/><br/>1 Month<br/>
at ৳125.81<br/><br/><br/><br/>
Get 7 day Free Trial<br/><br/><br/>
<div style="font-size:80%;text-align:center;color:white;font-family:courier;" >
Payment Methods<br/></div>
 
                
<td><a class="btn " href="payment.php" >subscribe now</a></td>

  <img src="payment-methods.png" class="p">
 </div>

 
</body>
</html>

