<?php
session_start(); 
$search_query = '';
if(isset($_GET["query"])){
  $search_query = $_GET["query"];
}

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not Admin','_self')</script>";
}
else {

?>
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
	<?php // import navbar
    include('styling/navbar.php'); ?>

      <nav>
          <ul class="list-group">
			  
			<li class="list-group-item"><a href="index(1).php?insert_product">Insert New Product</a></li>
			<li class="list-group-item"><a href="index(1).php?view_products">View Products</a></li>
			<li class="list-group-item"><a href="index(1).php?insert_cat">Insert New Category</a></li>
			<li class="list-group-item"><a href="index(1).php?view_cats">View All Categories</a></li>
			<li class="list-group-item"><a href="index(1).php?view_customers">View Customers</a></li>
			<li class="list-group-item"><a href="index(1).php?view_orders">View Orders</a></li>
			<li class="list-group-item"><a href="index(1).php?view_deal">View Deals</a></li>
			<li class="list-group-item"><a href="index(1).php?insert_deal">Insert Deals</a></li>
			<li class="list-group-item"><h1><a href="logout(1).php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg></a></h1>
        </li>
          </ul>
      </nav>
	
	<div class="site-section">
      <div class="container">
			
			<?php

				if(isset($_GET['insert_product'])){
					include("insert_product.php");
				}


				else if(isset($_GET['view_products'])){
					include("view_products.php");
				}

				else if(isset($_GET['edit_pro'])){
					include("edit_pro.php");
				}

				else if(isset($_GET['insert_cat'])){
					include("insert_cat.php");
				}

				else if(isset($_GET['view_cats'])){
					include("view_cats.php");
				}

				else if(isset($_GET['edit_cat'])){
					include("edit_cat.php");
				}

			
				else if(isset($_GET['view_customers'])){
					include("view_customers.php");
				}
				
				else if(isset($_GET['insert_deal'])){
					include("insert_deal.php");
				}

				else if(isset($_GET['view_deal'])){
					include("view_deal.php");
				}

				else if(isset($_GET['edit_deal'])){
					include("edit_deal.php");
				}


				else if(isset($_GET['view_orders'])){
					include("view_orders.php");
				}
				
				else{
					?>
	<div class="site-blocks-cover" style="background-image: url(product_images/doctor.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-2"> Welcome to Admin Area </h1>
          </div>
        </div>
      </div>
    </div>
					<?php
				}
}

			?>
		</div>
		</div>
	
	</div>


    
	
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/index.js"></script>
</body>
</html>