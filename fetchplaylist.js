				window.onload = function()
				{
				showSongs();

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
					document.getElementById("playlist").innerHTML = showSongData(jsOB);
					//document.getElementById("txtInfo").innerHTML = jsOB;


				}
				};
				xhttp.send();
			}

			function showSongData(testOb){
				 let data = "";
				 


				for (i in testOb) {
				let data = "";
				data += '<font face = "Comic sans MS" size =" 3">'


				for (i in testOb) {
				 	 data+= '<li song="'+testOb[i].name+'" cover="'+testOb[i].cover+'" artist="'+ testOb[i].artist +'">♫ '+testOb[i].name+'</li>';


				 }
				 
				 data+= "</font>";
				 return data;
				 }
				 
				 return data;
			}



			

