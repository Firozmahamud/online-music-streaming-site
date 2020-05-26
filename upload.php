<?php
   require_once("session.php");
  sStart();
  if(!($_SESSION['username'] == "tushar"))
  {   
    header('location:login.html');
  }
   $server = "localhost";
   $username = "root";
   $pass = "";
   $db = "player";

   //create connection 

   $conn = mysqli_connect($server,$username,$pass,$db);

   //check conncetion

   if($conn->connect_error){

      die ("Connection Failed!". $conn->connect_error);
   }

   
   

	if(isset($_POST['sub'])){
      $artist = $_POST['artist'];
      $errors= array();
      $file_name = basename($_FILES['song']['name']);
      $file_size =$_FILES['song']['size'];
      $file_tmp =$_FILES['song']['tmp_name'];
      $file_type=$_FILES['song']['type'];
      $explode= explode('.',$_FILES['song']['name']);
      $file_ext=strtolower(end($explode));
      $path= 'media/'.basename($_FILES['song']['name']);
      $extensions= array("mp3");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="please choose valid a MP3 file.";
      }
      


      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
      $img_name = "";
      if(isset($_FILES['cover'])){

      $img_name = basename($_FILES['cover']['name']);
      $img_size =$_FILES['cover']['size'];
      $img_tmp =$_FILES['cover']['tmp_name'];
      $img_type=$_FILES['cover']['type'];
      $explode= explode('.',$_FILES['cover']['name']);
      $img_ext=strtolower(end($explode));
      $imgpath= 'images/covers/'.basename($_FILES['cover']['name']);
      $imgextensions= array("jpeg","jpg","png");
      
      if(!($img_name == "")){
         if(in_array($img_ext,$imgextensions)=== false){
         $errors[]="please choose a valid image file.";
      }
         move_uploaded_file($img_tmp,$imgpath);
      }
      
      
   }


      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$path);
         ?>
         <script>
            alert("Upload Successful");
            location.href = 'admin.php';
         </script>
            
         <?php

         if($img_name == "")
      {
         $sql= "INSERT INTO songs(songName, artist) values('$file_name', '$artist')";
         $conn->query($sql);
      }
      else
      {
         $sql= "INSERT INTO songs(songName, artist, cover) values('$file_name', '$artist', '$img_name')";
         $conn->query($sql);
      }
      
      }

      else{
         ?>
         <script>
            alert("Please insert valid music or image file.");
            location.href = 'upload.php';
         </script>
            
         <?php 
      }

      
      

   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Upload</title>
</head>

<script type="text/javascript">
   function validateForm() 
   {
      var x = document.forms["uploadForm"]["artist"].value;
      if(x == "")
      {
         alert("Insert Artist Name");
         document.forms["uploadForm"]["artist"].focus();
         return false;
      }
      return true;
   }
</script>
<body>
   <form name="uploadForm" method="post" action="upload.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      Choose Song: <input type="file" name="song"> <br> <br>
      Choose Cover: <input type="file" name="cover"> <br> <br>
      Type Artist Name: <input type="text" name="artist"> <br> <br>
         
         <input type="submit" name="sub">
         <br> <br>
         <a href="admin.php">Go Back</a>
   </form>
</body>
</html>