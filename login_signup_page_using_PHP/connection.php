<?php
	$con=new mysqli("localhost","root","","web");
	if($con){
		echo "Connection Success";
	}
	else{
		echo "Connection Failed";
	}
?>