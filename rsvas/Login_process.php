<?php
ob_start();

//require "connection.php";
require "Model/User.php";
 

	if(isset($_POST['submit']))
	{
		$user_email = $_POST['user_email'];
		$user_password = md5($_POST['user_password']);
		if(!$user->emailRegister($user_email))
		{
			echo "Your mail id not register....";
			header("refresh:5;url=login.php");
		}
		else
		{
			if($user->checkPassword($user_email,$user_password))
			{
				echo "login successfully......<br/>";
				$_SESSION['user_id'] = $user->getUserId();
				$_SESSION['user_email'] = $user_email;
				header("refresh:2;url=User_Home.php");

			}
			else
			{
				echo "password not correct....";
				header("refresh:5;url=login.php");
			}

		}

	}
?>