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
    <meta charset="utf-8">
<link rel="stylesheet" href="style.css">

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

*{
  padding: 0;
  margin: 0;
  
}
body{

  background: #000;
}
.container{
  text-align: center;
  position: absolute;
  top: 48%;
  left: 30%;
  transform: translate(-30%,-50%);
  width: 70%;
}
.container span{
  text-transform: uppercase;
  display: block;
}
.text1{
  
  font-size: 30px;
  color: #E6E6FA;
  
  font-family:courier;
  letter-spacing: 0px;
  margin-bottom: 20px;
  background: black;
  position: relative;
  animation: text 3s 1;
}
.text2{
  font-size: 30px;
  color: #00FFFF;
  font-family:courier;
}

@keyframes text {
  0%{
    color: black;
    margin-bottom: -40px;
  }
  30%{
    letter-spacing: 25px;
    margin-bottom: -40px;
  }
  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
}


    
</style> 
    <title>About us</title>
    




  </head>
  <body>

  

<div class="container">
  <span class="text1">Md.Firoz Mahamud </br>BSC in CSE
  </br>


  </span>
  <span class="text2">American International University-Bangladesh (AIUB)</span>
  </br>
</br>


 <span class="text1">tushar </br>BSC in CSE
  </br>


  </span>
  <span class="text2">American International University-Bangladesh (AIUB)</span>

</div>



  </body>
</html>
