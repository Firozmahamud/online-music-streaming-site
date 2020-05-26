<?php
	if(isset($_POST['sub'])){
      $errors= array();
      $file_name = basename($_FILES['song']['name']);
      $file_size =$_FILES['song']['size'];
      $file_tmp =$_FILES['song']['tmp_name'];
      $file_type=$_FILES['song']['type'];
      $explode= explode('.',$_FILES['song']['name']);
      $file_ext=strtolower(end($explode));
      $path= 'media/'.basename($_FILES['song']['name']);
      $extensions= array("mp3");
      
      // if(in_array($file_ext,$extensions)=== false){
      //    $errors[]="please choose a MP3 file.";
      // }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$path);
         echo "Success";
         echo ' - ';
         echo $file_name."<br>";
         echo ' - ';
         echo $_FILES["song"]["tmp_name"]."<br>";
         echo ' - ';
         echo $file_type;
         echo ' - ';
         //echo $explode;
         //echo ' - ';
         echo $file_ext;
         echo '';

         print_r($_FILES['song']);
      }else{
         print_r($errors);
      }
   }
?>