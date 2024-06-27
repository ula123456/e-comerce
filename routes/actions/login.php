<?php 
session_start();
//include("routes/functions/check_cart.php");
if (isset($_POST['login'])) {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']); 
		$password = md5($password);


;

//// проверка логинирования узера ели  да вернуть данные юзера
$run_login = ExecuteNUM($sql="SELECT * FROM users WHERE password='$password' AND email='$email'");
if (0 == $run_login) {
	echo "<script>alert('password or email is wrong. try again!')</script>";	exit(); }

//// возврашения дату узера

	$check_login =Execute($sql);

	$sql="SELECT count(*) FROM cart WHERE ip_adress='$ip'";
	$check_cart = ExecuteNUM($sql);

//// ели казинка пуста то myaccount иначе chekout

		if ( $check_cart==0) {

				$_SESSION['user_id'] = $check_login[0]['user_id'];
				$_SESSION['role'] = $check_login[0]['role'];
				$_SESSION['email'] = $email;
  
				echo "<script>alert('You has logged sucessful !!!')</script>";

				header("Location: ".$baseUrl."/routes/actions/my_account");

		}else{

				$_SESSION['user_id'] = $check_login[0]['user_id'];
				$_SESSION['role'] = $check_login[0]['role'];
				$_SESSION['email'] = $email;
 
				echo "<script>alert('You has logged sucessful!')</script>";
				
				header("Location: ".$baseUrl."/routes/actions/checkout"); 
				//echo "<script>window.open('checkout.php','_self')</script>";
	
	  }

  }

require_once 'routes/templates/loginUser.php';	
				