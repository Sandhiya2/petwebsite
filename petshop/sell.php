<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$pet=$_POST['pet'];
$breed=$_POST['breed'];
$description=$_POST['description'];
$petimage=$_FILES["petimage"]["name"];
$name=$_POST['fullname'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$query=mysqli_query($con,"insert into petselling(pet,breed,description,petimage,name,contactno,address) values('$pet','$breed','$description','$petimage','$name','$contactno','$address')");
if($query)
{
	echo "<script>alert('Your details are submitted successfully, We will contact you soon');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Petz World</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">
        <link rel="stylesheet" href="css/body.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
        <style>
 #wrapper {
    display: inline-block;
    width: calc(100vw - 10vw - 250px);
    max-width: 900px;
    background: white;
    min-height: 90vh;
    border-radius: 5px;
    box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    padding: 20px;
    margin-left: 22%;
}
.sellpet h1{
	text-align: center;
}
.callus{
      margin: 0;
    padding: 5px;
    text-align: center;
    background: #068DE7;
    color: white;
    font-size: 14px;
    font-weight: normal;
    border-radius: 3px;
}
.callus a{
    color: black;
    text-decoration: none;
}
.callus a:hover{
    color: white;
}
            </style>
	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div id="wrapper">
    <div class="sellpet">
    <h1>Sell Your Pet</h1>
    <p class="callus">Helpline to sell your pet- <a href="tel:9585556668">9585556668</a></p><br>
	<div class="body-content outer-top-bd">
	<div class="container">
		<div class="sign-in-page inner-bottom-sm">
			<div class="row">
            <div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Pet Details</h4>
	<form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
	<div class="form-group" >
	<i class="fa fa-edit"></i> <label class="info-title" for="pet">Pet Type<span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="pet" name="pet" required="required" >
	  	</div>
		  <div class="form-group" >
		  <i class="fa fa-paw"></i> <label class="info-title" for="breed">Pet Breed<span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="breed" name="breed" required="required" >
	  	</div>
		  <div class="form-group" >
		  <i class="fa fa-pencil"></i> <label class="info-title" for="description">Pet Description<span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="description" name="description" required="required" >
	  	</div>
		  <div class="form-group">
		  <i class="fa fa-camera"></i> <label class="info-title" for="petimage">Add Your Pet Photo<span>*</span></label>
          <input type="file" name="petimage" id="petimage" value="" class="form-control unicase-form-control text-input" required>
          </div><br>
		  <h4 class="checkout-subtitle">Seller Details</h4>
<div class="form-group" >
<i class="fa fa-user"></i> <label class="info-title" for="fullname">Full Name <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required" >
	  	</div>

<div class="form-group">
<i class="fa fa-phone"></i> <label class="info-title" for="contactno">Contact No. <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" maxlength="10" required>
	  	</div>

<div class="form-group">
<i class="fa fa-address-card-o"></i> <label class="info-title" for="address">Address <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="address" name="address"  required >
	  	</div>

	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" id="submit">Register</button>
	</form>
	<span class="checkout-subtitle outer-top-xs" >Submit Your Pet Details, We Will Reach You Soon :-)</span>
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div>
	</div>
	</div>
	</div>
</div>
</div>
</div>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>
</div>
                    
<?php include('includes/footer.php');?>