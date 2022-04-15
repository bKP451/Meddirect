<?php
session_start();
include_once("db_connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION["email_login"]))
{
	 $email=htmlspecialchars($_POST['email_login']);
	 $password=htmlspecialchars($_POST['pwd_login']);
	 
	 $sql = "select * from login where email='$email'";
	 $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	 
	
	 if($row = mysqli_fetch_assoc($resultset)){		
		if(password_verify($password ,$row['password'])){ 
		//   if($password == $row['password']){
		  $_SESSION['email_login']=$row['email'];
		  header("Location: shop.php"); 
		  echo '<script>Success</script>';
		  
		}
		 else
		 {
		   echo '<script>Invalid username  or password </script>';
		 }
	 }
	 else
	     echo  "invalid credentials";
		 //echo '<script>Invalid username  or password </script>';
	 exit();
}
if(isset($_SESSION["email_login"])){
	echo "You are already logged in";
}
?>