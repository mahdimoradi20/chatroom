<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>

<link rel = "stylesheet" href = "css/mainstyle.css" />

<script src = "js/jquery.js" language = "javascript" ></script>

<script>


$(document).ready(function(){
	
	
	var obj = document.getElementById("board");


	

	$("#send").click(function(){
		
		
		var text = $("#txt").val();
		
		$("#txt").val("");
		
		$.post('send.php',{txtsend : text});
		
		
	});
	

	
	function Show(){
		
		$.post('show.php',function(data){

		$("#board").html(data);
		obj.scrollTop = obj.scrollHeight;
		});
	}
	
		setInterval(Show,200);
	});


</script>

</head>

<body>

<div id = "board" style = "text-align : right" ></div>

<form id = "frm" method = "POST" action = "send.php">

<input type = "text" id = "txt" />
<input type = "button" id = "send" value = "Send" />

</form>

<script language = "javascript" >



</script>

</body>

</html>