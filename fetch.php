<?php
	require_once("session.php");
  sStart();
  if(!isset($_SESSION['userID']))
  {
    header('location:login.html');
  }
	$testJSON = '[';
	$db = new mysqli('localhost','root','','player');
	foreach ( $db->query('SELECT * FROM songs') as $row ) {
    	$obj = new createJSON($row['songID'], $row['songName'], $row['artist'], $row['cover']);
		$testJSON .= json_encode($obj).',';	
	}
		$testJSON = substr($testJSON,0,strlen($testJSON)-1);
		$testJSON .= ']';
		echo $testJSON;
	$db->close();

	class createJSON {
		public $ID, $name,$artist, $cover;
		public function __construct($id, $n, $a, $c){
			$this->ID=$id;
			$this->name=$n;
			$this->artist = $a;
			$this->cover = $c;
		}
		}
?>