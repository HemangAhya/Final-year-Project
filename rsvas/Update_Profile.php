<?php 
@session_start();
require_once ("Model/User.php");
	if(isset($_POST['submit']))
	{
		
			$name = $_FILES['photo']['name'];
			if(!empty($name))
			{
			$uid = $_SESSION['user_id'];
			$mail = $_SESSION['user_email'];
			//$name = $_FILES['file']['name'];
			$ex = substr($name, strpos($name, '.'));
			
			$path = "User_Home_CSS/img/"."$uid"."$ex";//$_FILES['file']['name'] ;
			$tmp_name = $_FILES['photo']['tmp_name'];
			
			move_uploaded_file($tmp_name, $path);

			$user = new User();
			$user->setPrimaryKey("user_email");

			$data = array("user_profile_picture"=>"'$path'");

			$user->update($data, $mail);
			header("refresh:1;url=User_Home.php");
		}
		
	}
	header("refresh:1;url=User_Home.php");
?>