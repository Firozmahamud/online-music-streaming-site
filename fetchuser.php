<?php
	require_once("session.php");
  sStart();
  if(!isset($_SESSION['userID']))
  {
    header('location:login.html');
  }
	$testJSON = '[';
	$db = new mysqli('localhost','root','','player');
	foreach ( $db->query('SELECT * FROM login') as $row ) {
    	$obj = new createJSON($row['userID'], $row['user'], $row['pass']);
		$testJSON .= json_encode($obj).',';	
	}
		$testJSON = substr($testJSON,0,strlen($testJSON)-1);
		$testJSON .= ']';
		echo $testJSON;
	$db->close();

	class createJSON {
		public $ID, $Username,$Password;
		public function __construct($id, $u, $p){
			$this->ID=$id;
			$this->Username=$u;
			$this->Password = $p;
		}
		}

		
	
?>