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
        <h1>Dogs Bark-How To Limit Excessive Barking</h1>
    <img src="img/parenting/bark.png" width="750" height="450">
   <p> Barking is part of the dog's normal communication repertoire when it wants to get attention, but when it is repeated too often, this behaviour can irritate the owner (and neighbours!).Before trying to stop your dog from barking, you must first understand why he needs to do so.

The bark shows that the dog is on alert but it can carry different messages: "  Do you want to play with me  ?  Be careful, there is a danger not far away  ! , Take care of me, I'm unhappy , I'm afraid  ", etc. By observing your dog's attitude and behaviour , you will easily understand why your dog is barking.

At the first bark, give him a clear command (“Stop”! Or “Silence!”…). If he doesn't obey, don't shout . Call him and have him sit next to you. If your dog is silent for a few seconds, reward him. 

The problem is more difficult to solve when the dog barks as soon as he is alone . Very often, it is a problem of separation anxiety . The vet can then help you set up behavioural therapy. In some cases, medical treatment is even helpful in easing the dog's anxiety.
   </p>
<h3>Alternative Solutions</h3>
<p>
Some studies show that classical music has a calming effect on dogs.
The use of synthetic pheromones , intended to alleviate the stress of the dog, should be tried in dogs suffering from separation anxiety.
Nutrition can also have a positive role . For example, it has been proven that by increasing the intake of tryptophan (an essential amino acid) in the diet, the serotonin level in the cerebrospinal fluid is raised, which tends to calm the dog.
</p></div></body></html>