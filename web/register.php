<?php

$db = mysqli_connect("localhost","root","","db_user");

$username =$_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user_master(uname,password) VALUES('$username',md5('$password'))";

$result = mysqli_query($db,$query);



if($result == true){
	echo "Registered";
}else{
	echo "Failed";
}


?>

