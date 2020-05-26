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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">


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



  </head>
  <body>
  <div class="middle">
  
  
   <div style="font-size:160%;color:white;font-family:courier;">follow us on</div>
    
      <a class="btn" href="https://www.facebook.com/">

        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="btn" href="https://twitter.com/">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="btn" href="https://accounts.google.com/">
        <i class="fab fa-google"></i>
      </a>
      <a class="btn" href="https://www.instagram.com/">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn" href="https://www.youtube.com/">
        <i class="fab fa-youtube"></i>
      </a></br></br>
       <a style="color:white;font-family:courier;" > © 2019, Sargam Bangladesh Limited. All rights reserved.</a>
    </div>
   
  </body>
</html>
