<?php
  require_once("session.php");
  sStart();

  if(!($_SESSION['username'] == "tushar"))
  {
    header('location:login.html');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script language="Javascript" async>
			function showData(testOb){
				 let data = "";
				 data += "<table border='1'>";
				 data += "<tr>";
				 data += "<th>User ID</th>";
				 data += "<th>Username</th>";
				 data += "<th>Password</th>";
				 data += "<th>Operation</th>";
				 data += "</tr>";

				for (i in testOb) {
				 	data += "<tr>";
				 	data += "<td>"+testOb[i].ID+"</td>";
				 	data += "<td>"+testOb[i].Username+"</td>";
				 	data += "<td>"+testOb[i].Password+"</td>";
				 	data += "<td>"+'<input type = "button" id = "show" onclick="deleteUser('+testOb[i].ID+')" value="Delete"/></td>';
				 	data += "</tr>";
				 }
				 data += "</table>";
				 return data;
			}
			function showUser(){
				//alert("Name must be filled out");
				let xhttp;
				//document.getElementById("txtInfo").innerHTML = '<img src="loader.gif" /> ';
				let url = "fetchuser.php";
				//let param = "d=" + str;
				let method = "POST";
				let testAsync = true; 
				xhttp = new XMLHttpRequest();
				xhttp.open(method,url,testAsync);
				xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

				xhttp.onreadystatechange = function (){
					//document.getElementById("about").innerHTML= this.readyState;
					//document.getElementById("about2").innerHTML= this.statusText;
					//alert("Name must be filled out");

				if(this.readyState == 4 && this.statusText == "OK"){
					//let aba = JSON.stringify(this.responseText);
					//aba = aba.replace(/^\s+|\s+$/g, "");
					let jsOB = JSON.parse(this.responseText);;
					document.getElementById("txtInfo").innerHTML = showData(jsOB);
					//document.getElementById("txtInfo").innerHTML = jsOB;


				}
				};
				xhttp.send();
			}

			function deleteUser(id){
				//alert("This operation cannot be undone.");
				if (confirm('This operation cannot be undone.Are you sure you want to delete?')) {
				    $.ajax({
						  url: "delete.php",
						  type: "get",
						  data: { 
						    userid: id, 
						    
						  },
						  success: function(response) {
						    	alert("Done");
						    	showUser();
						  },
						  error: function(xhr) {
						    	alert("Error");
						  }
						});
				} 
				else {
				    
				}
			}
				

			
		</script>



		
			
	<script type="text/javascript" async>
		
		function showSongData(testOb){
				 let data = "";
				 data += "<table border='1'>";
				 data += "<tr>";
				 data += "<th>Song ID</th>";
				 data += "<th>Name</th>";
				 data += "<th>Artist</th>";
				 data += "<th>Cover</th>";
				 data += "<th>Operation</th>";
				 data += "</tr>";

				for (i in testOb) {
				 	data += "<tr>";
				 	data += "<td>"+testOb[i].ID+"</td>";
				 	data += "<td>"+testOb[i].name+"</td>";
				 	data += "<td>"+testOb[i].artist+"</td>";
				 	data += "<td>"+testOb[i].cover+"</td>";
				 	data += "<td>"+'<input type = "button" id = "show" onclick="deleteSong('+testOb[i].ID+')" value="Delete"/></td>';
				 	data += "</tr>";
				 }
				 data += "</table>";
				 return data;
			}



				function showSongs(){
				//alert("Name must be filled out");
				let xhttp;
				//document.getElementById("txtInfo").innerHTML = '<img src="loader.gif" /> ';
				let url = "fetch.php";
				//let param = "d=" + str;
				let method = "POST";
				let testAsync = true; 
				xhttp = new XMLHttpRequest();
				xhttp.open(method,url,testAsync);
				xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

				xhttp.onreadystatechange = function (){
					//document.getElementById("about").innerHTML= this.readyState;
					//document.getElementById("about2").innerHTML= this.statusText;
					//alert("Name must be filled out");

				if(this.readyState == 4 && this.statusText == "OK"){
					//let aba = JSON.stringify(this.responseText);
					//aba = aba.replace(/^\s+|\s+$/g, "");
					let jsOB = JSON.parse(this.responseText);;
					document.getElementById("txtInfo").innerHTML = showSongData(jsOB);
					//document.getElementById("txtInfo").innerHTML = jsOB;


				}
				};
				xhttp.send();
			}


			function deleteSong(id){
				//alert("This operation cannot be undone.");
				if (confirm('This operation cannot be undone.Are you sure you want to delete?')) {
				    $.ajax({
						  url: "deletesong.php",
						  type: "get",
						  data: { 
						    userid: id, 
						    
						  },
						  success: function(response) {
						    	alert("Done");
						    	showSongs();
						  },
						  error: function(xhr) {
						    	alert("Error");
						  }
						});
				} 
				else {
				    
				}
			}

	</script>
</head>
<body>
	<input type = "button" id = "show" onclick="showUser()" value="show user"/> <br> <br>
	<input type = "button" id = "show" onclick="showSongs()" value="show songs"/> <br> <br>
	<a href="upload.php">Upload a song</a>
	<br> <br>
	<a href="home.php">Go To Player</a>
	<br> <br>
	<a href="logout.php">Logout</a>
	<br> <br>
		<p id= "txtInfo"> </p>
</body>
</html>