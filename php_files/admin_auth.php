<?php
session_start(); 
include('includes/db.php');

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sel_user = "select * from admins where user_email = '$email' AND user_pass = '$pass'";
	$run_user = mysqli_query($con, $sel_user);

	$check_user = mysqli_num_rows($run_user);
	if($check_user == 0){
		echo "<script>alert('Try Again')</script>";
	}
	else{

		$_SESSION['user_email'] = $email;
		echo "<script>window.open('index(1).php?logged_in = You have successfully Logged in!','_self');</script>";
	}
}

?>