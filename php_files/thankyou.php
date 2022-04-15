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

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="display-4 glyphicon glyphicon-check"></span>
            <h2 class="display-1"><strong>Thank you!</strong></h2>
            <p>You order was successfuly completed.</p><br />
            <p><a href="shop.php" class="btn btn-sm btn-primary">Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="sitefooter border-top">       
          <div class="col-md-12 text-center">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
    </footer>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/index.js"></script>
    
  </body>
</html>