<?php

$connection = mysql_connect("localhost", "UserName", "Password") or dis("Couldn't Connect!");
mysql_select_db ("Motivational", $connection ) or dis("Couldn't Connect to Database");

echo "
<h1><center> Motivational App</center> </h1>

<form name="loginform"> <center>
<h2> Login </h2>
 Username: <input type="text" name="Uname"><br><br>
 Password: <input type="text" name="Password"><br><br>
 <button type="button" onclick="PCheck()">Login</button>
 
</form></center>

<script>
	function PCheck(){
		var un = document.loginform.Uname.value;
        var pw = document.loginform.Password.value;
        var username = "username"; 
        var password = "password";
			if ((un == username) && (pw == password)) {
				return true;
			}
			else {
				alert ("Login was unsuccessful, please check your username and password");
				return false;
			}
	
	}



</script>


";