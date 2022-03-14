<?php
	$conn = new mysqli("localhost","root","","h.i.s_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>