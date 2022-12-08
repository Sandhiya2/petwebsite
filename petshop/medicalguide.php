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
                    <li class="active"><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Medical Advancement In Pet Treatments</h1>
    <img src="img/parenting/medical.png" width="750" height="450">
    <p>When pets are brought home, it is our responsibility to care properly for them. Part of caring for our pets is ensuring that they receive frequent veterinary examinations throughout their lives. In addition, our pets are prescribed medications from professionals, and we trust that they are being provided the best preventative measures to live a long, healthy, and happy life in our home. </p>
    <h3>Vaccines</h3>
    <p>Vaccines are a crucial aspect of the health of our pets, and many of the vaccines that a veterinarian will recommend for your pet’s health have been tested and proven effective. Unfortunately, there has been somewhat of an “anti-vaccine” movement in veterinary medicine, but the essential vaccines that our pets should receive include Rabies, DHPP, Lyme, Bordetella (for dogs), and Lepto. </p>
    <h3>Fiber Optics</h3>
    <p>Fiber optic technology has become one of the more prominent and exciting new developments in many ways, from carrying light, internet, and more through tiny plastic fibers. Speaking on the technology,  Bond Vet animal hospital explains that fiber optics is a beneficial tool in procedures for pets. For example, if your pet is suffering from an internal health problem such as diarrhea or vomiting, the endoscope (made possible with fiber optics) allows the veterinarian to get a much closer look at the gastrointestinal tract, so a more accurate diagnosis can be made.</p>
<p>Endoscopes can be used when a pet has swallowed something to help identify if surgery is necessary. In addition, vets use even smaller fiber optics tools to look into the urethra or bladder when pets are suffering from severe disorders, and they can also give a view into a pet’s airway.</p>
<h3>Stem Cell Therapy</h3>
<p>A hot topic for discussion in veterinary practice, stem cell therapy has primarily focused on humans, specifically embryos. But unfortunately, there have been no safe practices that involve embryonic stem cells. Still, there are many proven advancements with adult stem cells, and now it has become available for dogs and cats.</p>
<h3>Anesthesia</h3>

<p>Since surgery has been discussed, it is important to note that there have also been medical advancements in anesthetics practices. When a pet needs to undergo a procedure, it is very common that anesthesia will be used to help sedate your pet.</p>
<h3>Medical Advancements in the Future</h3>

<p>While these are some of the more recent advances in medicine for our pets, there are bound to be many new methods and therapies that come to fruition. Technology is ever-changing and evolving, and it is helpful to stay on top of what tools, equipment, and new treatments can be beneficial to ensure that our pets are given the best care.</p>
        </div></body></html>