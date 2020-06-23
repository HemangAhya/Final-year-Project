<?php
@session_start();
require_once 'phpmailer/PHPMailerAutoload.php'; 
require_once ("Model_Abstract.php");
//require "connection.php";
	class User extends Model_Abstract
	{ 
		function __construct()
		{
			$this->tableName = "user_detail";
			$this->primaryKey = "user_email";
			//$this->primaryKey = "pk_user_id";
		}
		protected $user_id;
		
		function getUserId()
		{
			return $this->user_id;
		}

		function setUserId($id)
		{
			$this->user_id = $id;
			return $this->user_id;
		}

		function emailRegister($mail)
				{	
					//global $con;
					$this->setPrimaryKey('user_email');
					$rowcount = $this->selectByMail($mail);
					
					
					
					if($rowcount == 1)
					{
						return true;
					} 

					else
					{
						return false;
					}

				}


			function matchPassword($pass1,$pass2)
			{
				if($pass1 == $pass2)
				{
					return true;
				}

				return false;
				
			}

		

		

		function checkPassword($email,$password)
			{
					
					$rows = $this->selectById($email);
					//print_r($rows);
					
					if($password == $rows[0]['user_password'])
					{
						$this->setUserId($rows[0]['pk_user_id']);
						return true;
					}

					else
					{
						return false;
					}
					
					
			}

			function checkOTP($user_otp)
			{
				
				if($user_otp == $_SESSION['temp_otp'])
				{
					return true;
				}
				else
				{
					return false;
				}
			}


			function sendOTP($reciver_mail)
			{
					$otp = rand(1111,9999);
					$_SESSION['temp_otp'] = $otp;

					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Username = 'write ypor email hear';//update it before use
					$mail->Password = 'write your password hear';//update it before use
					$mail->setFrom('email','Your Name');//update it before use
					$mail->addAddress($reciver_mail);
					$mail->addReplyTo('your email id');//update it before use
					$mail->isHTML(true);
					$mail->Subject = 'OTP for signup';
					$mail->Body = 'your otp is<h1>'.$otp.'</h1>';
					if ($mail->send()) {
					//$error = "Mailer Error: " . $mail->ErrorInfo;
					//echo '<p>'.$error.'</p>';
						echo "your otp sent in your mail id ";
						return true;
					
						//header("refresh:2;url=otpForm.php");
						
					}
					else {
					//echo '<p>Message sent!</p>';
					echo "message not sent";
					return false;
					}
			}

	}

	$user = new User


?>