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
  
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
		<?Php
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			 
       
			// Create connection
			$con = new mysqli($servername, $username, $password, "pharmacy_db");

			// Check connection
			if ($con->connect_error) {
				die("Connection failed: " . $con->connect_error);
			}
			
			$product_id = $_GET['product_id'];
			//echo $product_id;
			$sql=mysqli_query($con, "SELECT * FROM product where product_id = '$product_id'");
			if(mysqli_num_rows($sql)){
					while($product_array=mysqli_fetch_array($sql)){
			?>
			<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $product_array['product_name']; ?></strong></div>
         			
		</div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
        <form action="cart.php" method="post">
            <div class="col-md-6">
              <img src="admin/product_images/<?php echo $product_array['product_image']; ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
              <h2 class="text-black"><?php echo $product_array['product_name']; ?></h2>
              <p  class="mb-4"><?php echo $product_array['product_description']; ?></p>
              <p><strong class="text-primary h4">Rs <?php echo $product_array['product_cost']; ?></strong></p>
              
              <div class="mb-5">
                  <div class="input-group mb-3" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-primary js-btn-minus" data-quantity="minus" data-field="quantity" >&minus;</button>
                  </div>
                  <input class="form-control text-center" name="quantity" value="1"  placeholder="" >
                  
                  <input type="hidden" name="product_id" value="<?php echo $product_array["product_id"]; ?>"/>

                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" data-quantity="plus" type="button" data-field="quantity">&plus;</button>
                  </div>
                
              </div>

              </div>
        
        <!-- <script>
        function geturl()
        {
          
        var product_quantity = $('[name=quantity]').val();
        var img = document.getElementById("pass-url");
        img.href = "cart.php?product_id=<?php echo $product_array["product_id"]; ?>&quantity=" +product_quantity;
        }
        </script> -->
              <p><button type="submit" id="pass-url" onclick = "geturl()" class="buy-now btn btn-sm btn-primary">Add To Cart</button></p>
            </div>
          </div>
        </form>
      </div>
    </div>
	<script>
	  var max_count = <?php echo $product_array['product_count']; ?>
	</script>
<?Php
					}
			}
           ?>


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
  jQuery(document).ready(function(){
    // This button will increment the value
	//var max_count = <?php echo $product_array['product_count']; ?>
	//alert(max_count);
    $('[data-quantity="plus"]').click(function(e){
      $("footer").hide()
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
			if(currentVal+1 <= max_count)
			{
        
            $('input[name='+fieldName+']').val(currentVal + 1);}
		else
      
			$(this).attr('disabled','disabled');
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(1);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
		$('[data-quantity="plus"]').attr('disabled',false);
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 1) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(1);
        }
    });
});
</script>
    
  </body>
</html>