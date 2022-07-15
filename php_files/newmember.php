<?Php
session_start();
$search_query = '';
if(isset($_GET["query"])){
  $search_query = $_GET["query"];
}

$page_no = 1;
if(isset($_GET["pageno"])){
  $page_no = $_GET["pageno"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pharmacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('styling/style.html'); ?>
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php // import navbar
    include('styling/navbar.php'); ?>
	
	<div class="site-section">
      <div class="container">
        <div class="row">
			
		<?php
			if(isset($_SESSION["email_login"])){
		 ?>
		 
			<div class="col-md-7">
				<div class="p-lg-5 border">
					<h2 class="h3 mb-3 text-black">You're already logged in!</h2>
					<a href="shop.php" class="btn btn-sm btn-primary">Shop Now</a>
				</div>
			</div>
		<?php
			}
			if(!isset($_SESSION["email_login"])){
		 ?>
          
<div class="col-md-5 ml-auto">
				<div class="p-4 border mb-3">
					<div class="text-center">
						<h2 class="h3 mb-3 text-black">Sign Up!</h2>
					</div>
				  <form id = "signup" action="register.php" class="form-container" method="post">
					<p>Password requirement : at least 1 digit, 1 Uppercase, 1 lower case, 1 special character. It should have 8 characters.</p>
					<div>
						<label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
						<input class="form-control" type="text" placeholder="Enter Name" id = "name" name="name">
                        </div>
						<span id="username_span"></span><br />
					</div>
					<div>
						<label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Enter Email" id = "email" name="email">
                        </div>
						<span id="email_span"></span><br />
					</div>
					<div>
						<label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Enter Password" id="password" name="password">
                        </div>
						<span id="password_span"></span><br />
					</div>
					<div>
						<label for="phone" class="text-black">Phone Number <span class="text-danger">*</span></label>
						<div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone">
                        </div>
						<span id="phone_span"></span><br />
					</div>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>	
				  </form>
				  </div>
          </div>
		  <?php
			}
		?>
			
          </div>
        </div>
      </div>
    </div>			
			<script>
				$("#email_login").attr("autocomplete",  "off");
			</script>			
      <footer class="site-footer border-top">       
          <div class="col-md-12 text-center">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
    </footer>
  </body>
</html>


			
          		