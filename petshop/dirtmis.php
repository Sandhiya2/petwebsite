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
        <h1>Why Is My Dog Eating Dirt?</h1>
    <img src="img/parenting/dirt.png" width="750" height="450">
    <p>Digging up and eating dirt and looking pleased about it is normal behaviour observed in dogs. 

Pups or adolescent doggies are usually just ‘nosey’ (pun intended) – they are curious and simply want to know what’s happening around them. They use their ‘nosey’ trait to ‘investigate’ and when they find something of ‘interest’, they embark on their excavation and gobble up their ‘find’. However, all the cuteness aside, if your dog is eating dirt all the time, it could be the manifestation of some type of illness and your baby could need medical attention. 

The top reason for your pooch eating mud is because it smells yummy and tastes even better! Well, the nose wants what the nose wants, and if it smells good, your pooch will eat it. Just as grass tastes good to some doggies, the patch your doggy digs up and gobbles, could have some traces of food or the ‘scent’ of another dog, which could be an ‘exciting find’. Younger doggies are naturally more playful and curious, and hence this trait would possibly be more pronounced in them and would fade away as they grow older.

A deficiency in the body could also lead to dirt eating. Some dogs lack certain minerals/vitamins, which they try to make up for by eating dirt. It is possible that the food you are ‘serving’ up is deficient in nutrients, and your dog could always end up being hungry, leading to a ‘good smelling’ patch of dirt being the ‘ideal snack’. Serious nutritional deficiencies could be the underlying cause and it is best that you check with your vet, who could suggest a new diet, exercise plan, and some supplements. </p></div></body>
</html>