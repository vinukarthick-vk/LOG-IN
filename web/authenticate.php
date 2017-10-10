<?php

$db = mysqli_connect("localhost","root","","db_user");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name = mysqli_real_escape_string($db,$_POST['username']);
	$pass = mysqli_real_escape_string($db,$_POST ['password']);
	
	$query = "SELECT * FROM user_master WHERE uname ='$name' and password = md5('$pass')";
	
	$result = mysqli_query($db,$query);
	
	
	if($result==true){
		echo "Successfully logged in";
	}else{
		echo "Failed";
	}
	
}




?>