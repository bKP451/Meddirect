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
          <div class="col-md-7">

            <form id="login" action="login.php" class="form-container" method="post">
              
              <div class="p-lg-5 border">
				  <div class="text-center">
					<h2 class="h3 mb-3 text-black">Log in!</h2>
				  </div>
		  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
					<div class="input-group mb-3">
                    <input type="text" class="form-control" id = "email_login" name="email_login" placeholder="Enter email">
					</div>
					<span id="emailspan"></span><br />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
					<div class="input-group mb-3">
                    <input type="password" class="form-control" id="pwd_login" name="pwd_login" placeholder="Enter password">
					</div>
					<span id="passwordspan"></span><br />
                  </div>
                </div>	
				  <div class="form-group row"> 
					<div class="col-md-12">
					  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
					</div>
				  </div>
				  <h4>New to MedDirect : </h4> 
				  <a href="newmember.php" class="btn btn-sm btn-danger"> Create a account </a>
				  
              </div>
            </form>
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