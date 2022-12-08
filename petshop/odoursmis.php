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
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li class="active"><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Dog Odours?</h1>
    <img src="img/parenting/odours.png" width="750" height="450">
    <p>Dogs naturally produce secretions that act as identification to other dogs. So that they can recognize

them by smell. Sadly, these odours may at times be too strong for pet parents, and are usually

strongest near the anus, near the ears, and around the footpads.</p>
<p>Another source of odour that can be considered natural results from a common dog behaviour. Dogs

like to roll in and mark themselves with animal products in their environment. This might be a

method of communicating with other animals in and around their home, or a behaviour to mask

their own smell.</p>
<h3>Unnatural Sources of Odour on Pet Dogs</h3>
<p>

Poor grooming: Some dogs, especially those with long, thick or corded hair, need regular grooming.

A coat that is not kept clean and groomed can trap dirt and other substances with unpleasant

odours. If a dog’s hair coat is chronically wet, it can harbour lots of bacteria and yeast.
</p>
<p>
Skin diseases: Dogs with allergies (allergic dermatitis, atopic dermatitis) may have a musty odour.

This is because allergies can cause increased sweating (hyperhidrosis), bacterial skin infections

(bacterial dermatitis or pyoderma) and yeast skin infections (Malassezia dermatitis). Dogs with

seborrhoea, a type of keratinization defect, and dogs with deep skin folds are also prone to bacterial

and yeast skin infections.


Ear diseases: Ear infections, or otitis are a common source of odour in dogs. The smell can be yeasty

or actually smell like sewage.</p>
        </div></body></html>