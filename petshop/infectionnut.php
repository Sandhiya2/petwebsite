<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
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

	    <title>Shopping Portal Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">

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
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
        </head>
        <body>
        <header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
</header>
<div class="main-nav">
<ul>
    <h4>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='behavioural.php'>BEHAVIOURAL</a></li>
                    <li><a href='parenting.php'>PET PARENTING</a></li>
					<li class="active"><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Urinary Tract Infection</h1>
    <img src="img/parenting/tact.png" width="750" height="450">
    <p>Frequent urination, straining to urinate, pain during urination, blood in urine, dribbling of urine, pus (cloudy) in urine etc. are often be signs of urinary tract infections or stones in the urinary tract. While most commonly these symptoms are indicative of UTI’s; it may also be indicative of serious underlying health issues or
complicated conditions, hence it is very important to consult your veterinarian immediately if your dog is showing any of these signs. Other symptoms include- licking around urinary opening, lethargy, fever, polydipsia, strong odour to urine, anorexia and weight loss.
</p>
<p>A complete blood profile work-up, which includes a complete blood count, a kidney function test and a liver function test. These tests help rule out or detect the presence of systemic diseases and also help us understand if there are any underlying infections.</p>
<p>Supplements that help maintain optimum urinary tract health</p>
<ul>
<li><b>Cranberries</b>- naturally cranberries may help ward off UTI’s as they help in acidification of urine and thereby prevent multiplication of bacteria. Make sure to avoid processed cranberries, their seeds and juices as they will do more harm than good. Dog suitable cranberry supplements such as Cranbact (Vivaldis) are commercially available.</li>
<li><b>Apple cider Vinegar</b>- this too helps in urine acidification, but too much may lead to gastric irritation in your pooch. A few drops maybe added to your dogs water bowl.</li>
<li><b>Vitamin C</b>- this acts as not only a urine acidifier but also an anti-inflammatory agent and anti-oxidant. Ask your vet for the correct dosage of vitamin C for your pet, as it will vary according to their weight and even their diet.</li>
<li><b>Water and fluids</b>- provide your dog with ample of fresh filtered water and other fluids like chicken broth, buttermilk (without spices) so that the fluid intake is high and the bladder is constantly flushed and the urine remains sufficiently diluted. </li>
</ul>
        </div></body></html>