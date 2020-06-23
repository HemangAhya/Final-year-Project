<?php
require_once ("Model/User.php");

	if(isset($_POST['email_submit']))
	{
		if(isset($_POST['user_email']) && !empty($_POST['user_email']))
		{
			$user_email = $_POST['user_email'];
			if($user->emailRegister($user_email))
			{
				$_SESSION['user_email'] = $user_email;
					if($user->sendOTP($user_email))
					{
					
						header("refresh:3;url=otpForm_For_Forgot_Password.php");
					}
			}
			else
			{
				echo "Your Mail id not Register";
				header("refresh:3;url=Forgot_Password_Form.php");
			}
		}
	}



	if(isset($_POST['otp_submit']))
	{
		if(isset($_POST['user_otp']) && !empty($_POST['user_otp']))
		{
			$user_otp = $_POST['user_otp'];

			if($user->checkOTP($user_otp))
			{	
				echo "email verification successfully.......<br/><br/><br/>";
				echo "please change your password";
				header("refresh:3;url=Password_Change_Form.php");
			}
			else
			{
				echo "your otp was not correct please try again...";
				header("refresh:5;url=Forgot_Password_Form.php");
			}
		}
	}



	if(isset($_POST['password_submit']))
	{
		$user_password = md5($_POST['user_password']);
		$user_confirm_password = md5($_POST['user_confirm_password']);

		if($user->matchPassword($user_password, $user_confirm_password))
		{
			$user = new User();
			$data = array('user_password'=>"'$user_password'");
			$user_email = $_SESSION['user_email'];
			$user->setPrimaryKey("user_email");
			$user->update($data,$user_email);
			$user->setPrimaryKey("user_email");
			
				echo "password updated successfully......";
				header("refresh:3;url=login.php");
			
		}
		else
		{
				echo "Password and Confirm password must be same";
				header("refresh:5;url=Password_Change_Form.php");
		}
	}

?>