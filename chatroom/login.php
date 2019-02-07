<?php

session_start();

$usrname = $_POST['username'];

if($usrname == ""){
	
	header("location:index.html?status=empty");
	
}
else{
	
	$_SESSION['user'] = $usrname;
	header("location:main.php");
	
}


?>