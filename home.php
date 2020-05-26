<?php
	require_once("session.php");
	sStart();
	if(!isset($_SESSION['userID']))
	{
		//echo $_SESSION['userID'];
		header('location:login.html');
	}

?>

<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Audio Player</title>

     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="jquery.vide.js"></script>
     <script src="fetchplaylist.js"></script>
</head>
<body data-vide-bg="motionplace">
<meta charset="UTF-8">
    
    <link rel="stylesheet" href="style.css">
    

<div class="custom-padding">
  <nav>
    <div class="logo">
   
    সারগাম‌</div>

    <ul class="menu-area">
    
 
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="sub.php">Subscription</a></li>
      <li><a href="social.php">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>

    </ul>
  </nav>
</div>

<meta charset="UTF-8"> 
<link rel="stylesheet" href="style.css">
 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js">
 </script>
<title>Search Box</title> 
<body> 
<div class="search-box"> 
<input type="text" name="" class="search-txt" placeholder="  Type to search"/> 
<a class="search-btn" href="#">
 <i class="fas fa-search">
 </i>
  </a> 
  </div> 
  </body> 






    <link rel="stylesheet" href="css/style.css" media="screen">
</head>
<body>
 <div class="clearfix"></div>
  <p style="font-size:160%;color:white;font-family:courier;" ><br/> &nbsp <font face = "Comic sans MS" size =" 5">Playlist</font><br />
  		
  		<font face = "Comic sans MS" size =" 3">
		 <ul id="playlist" class="hidden">

		 	<li song="bondho janala.mp3" artist="shironamhin"cover="shironamhin.jpg">♫ bondho janala.mp3</li>
			<li song="Alan Walker Sabrina Carpenter  Farruko  - On My Way.mp3" cover="Poster1.jpg" artist="Alan Walker Sabrina Carpenter  Farruko">♫ On My Way.mp3</li>


			<li song="Cool and Inspiring Background Music.mp3" cover="Poster2.jpg" artist="unknown">♫ Inspiring Music.mp3</li>

			<li song="Jarico - Landscape [FREE].mp3" cover="Poster3.jpg" artist="unknown">♫ Jarico.mp3</li>


			<li song="Preme Pora Baron  Full Song  Sweater  Ishaa  Lagnajita  Bengali Movie 2019.mp3" cover="Poster1.jpg" artist="Ishaa ">♫ Preme Pora Baron.mp3</li>

			<li song="Kicchu Chaini Ami from Movie- Shahjahan Regency... Acoustic Cover by Dr. Gourab Das.mp3" cover="Poster2.jpg" artist="Gourab Das">♫ Kicchu Chaini Ami.mp3</li>
			
			<li song="hasimukh.mp3" artist="shironamhin">♫ Hasimukh.mp3</li>
			
		</ul>
		</font>
	</div>



<div id="container">
<div id="p" style="font-size:160%;text-align:center;color:white;font-family:courier;" ><font face = "Garamond" size =" 6">Now Playing</font></div></br>
	<div id="audio-image">
		<img class="cover" />
	</div>
	<div id="audio-player">
		<div id="audio-info">
			<font face = "Garamond" size =" 4">
			<span class="artist"></span> - <span class="title"></span></br>
		</font>
		</div>

		 <input id="volume" type="range" min="0" max="10" value="5" />
		 <br>
		 <div id="buttons">
                    <button id="prev" onclick="prev()"><img src="Prev.png" height="90%" width="90%"/></button>
                    <button id="pause" onclick="pause()"><img src="pause.png" height="90%" width="90%"/></button>
                    <button id="play" onclick="playOrPauseSong()"><img src="Play.png"/></button>
                    <button id="next" onclick="next()"><img src="Next.png" height="90%" width="90%"/></button>
                </div>
                
		 </div>
		 <div class="clearfix"></div>
		 <div id="tracker">
			<div id="progressBar">
				<span id="progress"></span>
			</div>
			<span id="duration"></span>
		 </div>
		

</div>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>