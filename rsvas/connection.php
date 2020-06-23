<?php

	$con = mysqli_connect("localhost","root","","rsvas");
	//echo "connect";
	
	if(mysqli_connect_error())
	{
			echo "Failed to Connect".mysqli_connect_errno();
	}

?>