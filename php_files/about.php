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
    <title>About</title>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
        </div>
      </div>
    </div>  
    <div class="text-center">
            <img src="images/about_pic.jpg" class="img-fluid rounded">
          </div>
    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Learn more about our pharmacists</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12 col-lg-5 pl-md-5">
		  <p>MedDirect pharmacists do much more than dispense prescriptions. Your pharmacist can help you and your family stay healthy by:</p>
      <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Answering your questions:
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      If you have any questions regarding your medications or about one of the many services we offer, your pharmacist can help. They are always ready and willing to assist you.
    </div>
  </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Provide Immunizations:
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Our specially trained and certified pharmacists can provide a wide range of immunizations. You don’t need an appointment and we accept most insurance plans. Take your FREE Immunization Evaluation and talk to your pharmacist today.  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Helping you save money:
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Your pharmacist can help guide you through questions you may have about your prescription insurance coverage, including Medicare Part D. </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        Referring to the doctor:
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Your pharmacist will work directly with your doctor when they have questions or possible concerns about the medications you are taking. They ensure you are at the lowest possible risk for overdoses and adverse drug reactions by keeping a detailed history of the medications you take.
    </div>
  </div>
  </div>

  
  </div>
</div>
      </div>
			
			
		  <h4>So be sure to talk to your MedDirect pharmacist today. The better they know you, the better they can help serve you and your needs.</h4>
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
	
  </body>
</html>