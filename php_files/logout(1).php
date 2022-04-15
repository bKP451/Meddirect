<?php

session_start();
if(isset($_SESSION['user_email'])){
	unset($_SESSION["user_email"]);
}


header("Location: login(1).php");
// echo "<script>window.open('login.php','_self')</script>";

?>