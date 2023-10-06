<?php 
session_start();
$error = array();

require "mail.php";

	if(!$con = mysqli_connect("localhost","root","","icst")){

		die("could not connect");
	}

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "That email was not found";
				}else{

					$_SESSION['forgot']['email'] = $email;
					send_email($email);
					header("Location: forgot1.php?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "the code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forgot1.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];

				if($password !== $password2){
					$error[] = "Passwords do not match";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location: ../../index.php");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}

					header("Location: ../../index.php");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}

	function send_email($email){
		
		global $con;

		$expire = time() + (60 * 5);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "INSERT INTO codes (email,code,expire) VALUE ('$email','$code','$expire')";
		mysqli_query($con,$query);

		//send email here
		send_mail($email,'Password reset',"Your reset code is " . $code);
	}
	
	function save_password($password){
		
		global $con;

		
		$email = addslashes($_SESSION['forgot']['email']);

		 $query = "update prof set password = '$password' where email = '$email' limit 1";
		
		// $query ="UPDATE admin SET `Id`='1',`email`='$email',`passWord`='$password' WHERE 1 limit 1 ";

		// $query =  "INSERT INTO admin (passWord,email) VALUE ('$passWord','$email')";
		mysqli_query($con,$query);

	}
		
	function valid_email($email){
		global $con;

		$email = addslashes($email);

		$query = "SELECT * FROM prof WHERE email = '$email' limit 1";		
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $con;

		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "SELECT * FROM codes WHERE code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "the code is correct";
				}else{
					return "the code is expired";
				}
			}else{
				return "the code is incorrect";
			}
		}

		return "the code is incorrect";
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="../assets/css/general/reset.css">
	 <!-- <link rel="stylesheet" href="../../assets/css/admin/mailer.css"> -->
		<link rel="stylesheet" href="../../assets/css/teacher/next.css">
	<title>Forgot</title>
</head>
<body>
	<div class="sidebar">
		 <ul>
      <img src="../../assets/images/logo_trans.png">
    </ul>
		
	</div>


		<?php 

			switch ($mode) {
				case 'enter_email':
					// code...
					?>
					<div class="content">
						<form class="form1" method="post" action="forgot1.php?mode=enter_email"> 
							<h1>Please input your recovery email</h1><br>
							<h3>Enter your email below</h3>
							<span style="font-size: 20px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>
							<input class="textbox" type="email" name="email" placeholder="Email"><br>
							
							<button class="submit100" type="submit" name="login">Next</button>
							
							
						</form>
						</div>
					<?php				
					break;

				case 'enter_code':
					// code...
					?>
					<div class="n_form">
						<form class="f_next" method="post" action="forgot1.php?mode=enter_code"> 
						
							<h1>Please input your Verification code</h1><br>

							<h3>Enter your code we sent to your email</h3>
							<span style="font-size: 20px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>

							<input class="textbox1" type="text" name="code" placeholder="12345"><br>

							<input class="btn_next" type="submit" value="Next">
							
							
						</form>
					</div>
					<?php
					break;

				case 'enter_password':
					// code...
					?>
					<div class="e_form">
						<form class="sub_form" method="post" action="forgot1.php?mode=enter_password"> 
							<h1>Please update your password</h1>

							<h3>Enter your new password</h3>
							<span style="font-size: 20px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>

							<input class="textbox2" type="text" name="password" placeholder="Password"><br>
							<input class="textbox2" type="text" name="password2" placeholder="Confirm Password">

							<input class="nxt" type="submit" value="Confirm">
							
						
							<!-- <button class="confirmed">Login</button> -->
						</form>
						</div>
					<?php
					break;
				
				default:
					// code...
					break;
			}

		?>


</body>
</html>