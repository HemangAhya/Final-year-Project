<?php
	session_start();
	session_destroy();
	echo "You have successfully Logout";
	header("refresh:5;url=index.php");
?>