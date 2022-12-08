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
        <h1>Best Toys For Dogs Of All Ages And Sizes</h1>
    <img src="img/parenting/biting.png" width="750" height="450">
    <h3>Puppy Toys</h3>
<p>
The first few months in the life of a pupperino involves several changes, and as a pet parent you would be helping the ‘baby’ adjust well by providing many toys in this period of transition. They need toys that would soothe their gums during teething and distract them from your furniture, shoes, and any other items lying around. To combat separation anxiety, you could get them snuggly/squeaky toys or a soft blanket. 
</p>
<h3>Teeth Cleaning and Soothing Toys</h3>
<p>
These toys not only keep your dog occupied but also serve to keep their ‘chompers’ clean and healthy. These dental toys have textured surfaces or bristles or grooves and they enable healthy chewing and gentle plaque removal. Choose softer and smaller toys for puppies, while the bigger adult dogs could be given chew toys or rope toys that enable gum massaging and teeth flossing.
</p>
<h3>Food and Treat Dispensing Toys</h3>
<p>
These toys can keep your dog busy for a good period, while also stimulating them physically and mentally. To retrieve the treat or food, these toys need to be acted upon by your furry friend by either throwing or rolling or pawing them around. The opening that dispenses the ‘hidden treasure’ can be adjusted to either allow easier dispensing or pose a bit of a challenge, depending on your doggy’s disposition. These toys also tend to be longer-lasting. 
</p>
<h3>Mesh Balls/Toys</h3>
<p>
Hollow toys, with a mesh design, help easier airflow for your doggy even if he/she is running with it in the mouth. These toys are lightweight and can even hold treats to make game-time more interesting and fun.
</p>
<h3>Hardy – Almost Indestructible Toys</h3>
<p>
These toys are for the big boys with large strong chompers! They are made with robust and durable material that is puncture resistant – ensuring that your ‘big baby’ would have a real challenge! It would be best to choose shapes that your pooch is ‘biased’ towards – ball-shaped, or stick-shaped, or squeaky toys. 
</p>
<h3>Toy’ing Around Aesthetically
</h3>
<p>Yes, you love your furry baby but ensuring that your home does not look like a dumpster for old toys, is also important. Choose toys that are durable and rate high on aesthetics too. Carefully selected toys will nurture the playful and intelligent natural characteristics of dogs while stimulating them. Toys encourage exercise and keep them entertained, even when you are not around. The tugging toys/ropes are safe and low cost, and make for a great game of tug-of-war. Whatever you decide to choose for your furry buddy, ensure that it is safe, hygienic, humanely made, and long-lasting. Have fun toying around! 
</p></div></body></html>