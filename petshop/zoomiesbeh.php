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
        <h1>What Are Zoomies? Why Do Dogs Get The Zoomies?</h1>
    <img src="img/parenting/zoomies.png" width="750" height="450">
   <p> The behaviour might appear silly but it is a condition known as zoomies, and it refers to your dog getting full-on energy from somewhere. But should you be worried?  Let’s get the answers here! In this post we will discuss about why do dogs get Zoomies and how to get them out of it.
   </p>

<h3>What Are Zoomies?</h3>

<p>Zoomies are scientifically called Frenetic Random Activity Periods (FRAPs) that you can normally see in dogs. But not all dog species are prone to zoomies.
Zoomies happen when the dog is releasing his pent-up energy after a long time. If you have locked up to your pet in a room or haven’t been around him for a while, then finally, when he gets the time to enjoy himself, he would get zoomies. For example, if your dog is in the house for a while and you finally take him out on a run, he will get super excited and run around in circles for a while. It looks funny when dogs get zoomies and scary if you are not a dog person. But there is nothing to be worried about. 
</p>

<h3>How Do Zoomies Look Like?</h3>

<p>When your dog gets zoomies, he will release the bottle up energy, and it might look like frantic frolics in the backyard of your house or jump inside the house. When dogs get zoomies, they are at the full-on energy level. They behave unexpectedly, and sometimes the behaviour is repetitive. Sometimes they bark randomly or start playing with their toys and try to convince you to join them in the game. But if this is a puppy we are talking about, then avoid joining them when they are getting zoomies because puppies usually nibble at their favourite owners all the time, and during the FRAPs, those nibbles can turn into bites. If you are a new dog owner, then you will have to know when and how your dog gets zoomies and how to treat her during these situations. 
</p>

<h3>When and Where Do Zoomies Happen?</h3>
<p>Zoomies in dogs are most common at the same time every day or at least after a certain activity like taking a bath. Sometimes they have zoomies after waking up each morning or having a satisfying poop. Zoomies are mostly seen in young dogs, but old dogs or middle-aged dogs can also get zoomies from time to time. But the younger the dog, the most likely he will get zoomies. Young dogs tend to have more energy than the old ones, and if they don’t get time or chance to release those energies, then they will do that through zoomies after certain activities. So, zoomies are safe, and there is nothing to be worried about when your dog is getting them all of a sudden. But you should learn some tips on how to handle a dog in zoomies.
</p>

<h3>How to Treat a Dog When He is Having Zoomies?</h3>

<p>When your dog is having zoomies, it is better to let him be and not interrupt his behaviour or be worried about it. But make sure to keep him in a safe place and away from people who are scared of dogs. 
</p>
        </div></body>
        </html>