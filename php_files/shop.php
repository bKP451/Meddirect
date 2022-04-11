<?Php
session_start();
$search_query = '';
if(isset($_GET["query"])){
  $search_query = $_GET["query"];
}

$categories = [];

if(isset($_GET['category'])){
  $category_name = $_GET['category'];
  $categories = explode(',',$category_name);
}

$page_no = 1;
if(isset($_GET["pageno"])){
  $page_no = $_GET["pageno"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop Now</title>
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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
			<!-- append filter_data -->
			
			<!-- side bar -->
          <div class="col-md-3 order-1 mb-4 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
			    <?php
					$servername = 'localhost';
					$username = 'root';
					$password = '';
			   
					// Create connection
					$con = new mysqli($servername, $username, $password, "pharmacy_db");

					// Check connection
					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					}

          $sql=mysqli_query($con, "SELECT * FROM category where category_status='1'");

					if(mysqli_num_rows($sql)){
					while($product_array=mysqli_fetch_array($sql)){
                    
                 
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" <?php if(in_array(trim($product_array['category_name']),$categories)) echo 'checked'; else echo 'test'; ?> class="common_selector category" value="<?php echo $product_array['category_name']; ?>" > <?php echo $product_array['category_name']; ?> </label>
                    </div>
                    <?php    
                    }
					}
                    ?>            
				</ul>
                </div> 
            </div>
			<!-- side bar end -->
			
			
          </div>
		
		 
			 </div>
			
           
          </div>
        </div>
        
      </div>
    </div>

 <footer class="site-footer border-top">       
          <div class="col-md-12 text-center">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
    </footer>
  </div>
   
  <script src="js/bootstrap.min.js"></script> 
	<script src="js/index.js"></script>
	<script>
$(document).ready(function(){

    filter_data();

    $('.common_selector').click(function(){
        filter_data();
    });

});
function filter_data()
{
    
    var action = 'fetch_data';
    
    var category = get_filter('category');

    $(".results").remove();
	$(".pagination").html("");

    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{
          action:action,
          category:category, 
          query: '<?php echo $search_query; ?>', 
          pageno: '<?php echo $page_no;?>'
        },
        success:function(data){
            $('.mb-5').append(data);
    //event.preventDefault();
        }
    });

}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
  
    });
    return filter;
}
</script>
    
  </body>
</html>