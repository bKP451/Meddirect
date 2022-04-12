<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pharmacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('styling/style.html'); ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">

	
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include('styling/navbar.php'); ?>
      <!--<nav class="site-navigation text-md-center" role="navigation">
          <ul class="site-menu">
			<li><a href="index.php?insert_product">Insert New Product</a></li>
			<li><a href="index.php?view_products">View Products</a></li>
			<li><a href="index.php?insert_cat">Insert New Category</a></li>
			<li><a href="index.php?view_cats">View All Categories</a></li>
			<li><a href="index.php?view_customers">View Customers</a></li>
			<li><a href="index.php?view_orders">View Orders</a></li>
			<li><a href="index.php?view_payments">View Payments</a></li>
          </ul>
      </nav>-->
    

<div class="col-md-7">
<h2 style="color: white; text-align: center;"><?php echo @$_GET['not_admin']; ?></h2>
	<h2 style="color: white; text-align: center;"><?php echo @$_GET['logged_out']; ?></h2>

	<h1>Admin Login</h1>
            <form id="login" class="form-container" method="post">
              
              <div class="p-lg-5 border">
		  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="text" name="email" placeholder="Email" required="required" />
					<span id="emailspan"></span><br />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" placeholder="Password" required="required" />
					<span id="passwordspan"></span><br />
                  </div>
                </div>	
				  <div class="form-group row"> 
					<div class="col-md-12">
					  <button type="submit" class="btn" name="login">Log in</button>
					</div>
				  </div>
				  
              </div>
            </form>
</div>

</body>
</html>
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
		echo "<script>window.open('index.php?logged_in = You have successfully Logged in!','_self');</script>";
	}
}

?>
