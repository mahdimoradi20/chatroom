<?php

$con = mysqli_connect('localhost','root','','mahdi');

$sql = "select * from chats";

$res = mysqli_query($con,$sql);

while($rows = mysqli_fetch_assoc($res)){
	
	echo "<font size = '5'>" . $rows['strings']. "</font>" ."<br />";
	
}

?>