<?php
//require "connection.php";
require_once "Model/User.php";
//require_once ("Model/Model_Abstract.php");
	
		
	
	if(isset($_POST['submit']))
	{
		$user_email = $_POST['user_email'];
		$user_mobile = $_POST['user_mobile'];
		$user_password = md5($_POST['user_password']);
		$user_confirm_password = md5($_POST['user_confirm_password']);
		global $user;
		if(isset($user_email) && isset($user_mobile) && isset($user_password) && isset($user_confirm_password))
		{
			if($user->matchPassword($user_password,$user_confirm_password))
			{
				if(!$user->emailRegister($user_email))
				{	
					$_SESSION['email'] = $user_email;
					$_SESSION['mobile'] = $user_mobile;
					$_SESSION['password'] = $user_password;
					if($user->sendOTP($user_email))
					{
					
						header("refresh:4;url=otpForm.php");
					}
						
				}
				
				else
				{
					echo "email id already registred.....";
					header("refresh:5;url=signup.php");
				}
			}
			else
			{
				echo "Password and Confirm password must be same";
				header("refresh:5;url=signup.php");

			}
		}
	}


	if(isset($_POST['otp_submit']))
	{
		if(isset($_POST['user_otp']))
		{
			 $user_otp = $_POST['user_otp'];
			
			
			if($user->checkOTP($user_otp))
			{
					$email = $_SESSION['email'] ;
					$mobile = $_SESSION['mobile'] ;
					$password = $_SESSION['password'] ;
				$data  = array('user_email'=>"'$email'",'user_mobile'=>"'$mobile'", 
							'user_password'=>"'$password'", 'user_profile_picture'=>"'User_Home_CSS/img/profile.jpg'");
				//print_r($data);
				if($user->insert($data))
				{
				
				echo "signup successfully.....";
					$_SESSION['email'] = "";
					$_SESSION['mobile'] = "";
					$_SESSION['password'] = "";
				header("refresh:5;url=login.php");
				}	

				
			}
			else
			{
				echo "your otp was not correct please try again...";
				header("refresh:5;url=signup.php");
			}
		}
	}



	
?>
