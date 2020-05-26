<?php
// 	sleep(1);
// 	$con = mysqli_connect("localhost","root","","player");
// 	if($con->connect_error) {
// 		exit('Could not connect');
// 	}
// 	//$recData = $_POST['d'];
// 	$sql = "SELECT * FROM login;";
// 	$stmt = $con->prepare($sql);
// 	//$stmt->bind_param("s", $recData);
// 	$stmt->execute();
// 	$stmt->store_result();
// 	$stmt->bind_result($userID, $user, $pass);
// 	$stmt->get_result();
	
// 	while ($row = $stmt->fetch_array(MYSQLI_BOTH)) {
//     // Look inside $row here, do what you want with it.
// }

// 	$stmt->fetch();
	
	/*
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Password</th>";
	echo "<th>Type</th>";
	echo "</tr><tr>";
	echo "<td>" . $id . "</td>";
	echo "<td>" . $name . "</td>";
	echo "<td>" . $pass . "</td>";
	echo "<td>" . $type . "</td>";
	echo "</tr>";
	echo "</table>";
*/
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