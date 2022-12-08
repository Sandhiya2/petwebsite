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
                    <li class="active"><a href='behavioural.php'>BEHAVIOURAL</a></li>
                    <li><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Cat Sterilization</h1>
    <img src="img/parenting/sterilization.png" width="750" height="450">
    <p>Castrating a cat necessarily involves a modification of hormonal secretions which directly influence its behaviour. Much calmer, less prone to hunting and the desire to run away, the sterilized cat necessarily reduces its risk of injuries, bites by other dominant males or serious accidents.
    </p>
<h3>At what age should my cat be sterilized?</h3>

<p>Sterilisation is usually done before the age of puberty (6-7 months), but it can be done at any age.Your veterinarian is the only professional qualified to inform you on the method of sterilisation to choose. For the female, there is temporary sterilisation, hormonal contraceptive treatment, or permanent sterilisation which consists of removing the ovaries. 

This surgical method avoids the risk of infection of the uterus and reduces the incidence of breast tumors. For the male, final castration consists of the removal of his testicles. This method is performed through a small incision in the scrotum and does not require any thread after the procedure.
</p>
<h3>Prevent obesity in sterilised cats</h3>


<p>In spayed or neutered cats, the risk of obesity is higher because they tend to eat more while their energy needs are reduced by more than 30% .The most critical period is during the two months following the operation. Note that this risk of obesity is greater in males than in females because their fat gain in particular is twice as high, which explains why cats are more often overweight.
</p>
<h3>Adapting the diet of the sterilised cat</h3>
<p>
After sterilization, a cat weighing 4 kg can easily gain two more in the space of two months, which is the equivalent of 30 kg for a man who weighs 60.This increase in weight, aggravated by a high level of fat in the food, predisposes the cat to the installation of a proven obesity which can have serious consequences on its health .It is therefore essential to choose a food that helps prevent the risk of overweight thanks to an adjusted caloric intake. 

Developed with less fat and less carbohydrates that stimulate appetite, these specific foods help maintain muscle mass thanks to a high protein content of high biological value. They also promote proper functioning of the urinary system by controlling the acidity of urine.
</p>
        </div></body></html>